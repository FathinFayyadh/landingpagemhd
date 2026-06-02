Add-Type -AssemblyName System.Drawing

function Resize-Image {
    param (
        [string]$SourcePath,
        [string]$DestinationPath,
        [int]$MaxWidth,
        [int]$MaxHeight
    )
    try {
        $srcImage = [System.Drawing.Image]::FromFile($SourcePath)
        $width = $srcImage.Width
        $height = $srcImage.Height

        # Calculate new dimensions preserving aspect ratio
        $ratioX = $MaxWidth / $width
        $ratioY = $MaxHeight / $height
        $ratio = [System.Math]::Min($ratioX, $ratioY)
        if ($ratio -gt 1) { $ratio = 1 } # Do not upscale

        $newWidth = [int]($width * $ratio)
        $newHeight = [int]($height * $ratio)

        $newImage = New-Object System.Drawing.Bitmap($newWidth, $newHeight)
        $graphics = [System.Drawing.Graphics]::FromImage($newImage)
        
        # Set high quality settings
        $graphics.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
        $graphics.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
        $graphics.PixelOffsetMode = [System.Drawing.Drawing2D.PixelOffsetMode]::HighQuality
        $graphics.CompositingQuality = [System.Drawing.Drawing2D.CompositingQuality]::HighQuality
        
        $graphics.DrawImage($srcImage, 0, 0, $newWidth, $newHeight)
        
        # Save image (with compression)
        $ext = [System.IO.Path]::GetExtension($DestinationPath).ToLower()
        if ($ext -eq ".jpg" -or $ext -eq ".jpeg") {
            $codec = [System.Drawing.Imaging.ImageCodecInfo]::GetImageEncoders() | Where-Object { $_.FormatID -eq [System.Drawing.Imaging.ImageFormat]::Jpeg.Guid }
            $encoderParams = New-Object System.Drawing.Imaging.EncoderParameters(1)
            $encoderParams.Param[0] = New-Object System.Drawing.Imaging.EncoderParameter([System.Drawing.Imaging.Encoder]::Quality, 85) # 85% quality
            $newImage.Save($DestinationPath, $codec, $encoderParams)
        } else {
            $newImage.Save($DestinationPath, [System.Drawing.Imaging.ImageFormat]::Png)
        }
        
        $graphics.Dispose()
        $newImage.Dispose()
        $srcImage.Dispose()
        Write-Host "Successfully resized: $SourcePath -> $DestinationPath ($newWidth x $newHeight)"
    } catch {
        Write-Error "Failed to resize $SourcePath: $_"
    }
}

# Ensure backup directory exists
$backupDir = "public/landingpage/assets/images_backup"
if (-not (Test-Path $backupDir)) {
    New-Item -ItemType Directory -Path $backupDir | Out-Null
    Write-Host "Created backup directory: $backupDir"
}

# Images to process
$imagesToResize = @(
    @{ Path = "public/landingpage/assets/images/profilhuman.png"; MaxW = 600; MaxH = 600 },
    @{ Path = "public/landingpage/assets/images/about/about-profil.png"; MaxW = 600; MaxH = 400 },
    @{ Path = "public/landingpage/assets/images/visi-misi.png"; MaxW = 600; MaxH = 400 },
    @{ Path = "public/landingpage/assets/images/misi.jpg"; MaxW = 600; MaxH = 450 },
    @{ Path = "public/landingpage/assets/images/vis.jpg"; MaxW = 600; MaxH = 450 },
    @{ Path = "public/landingpage/assets/images/visii.jpg"; MaxW = 600; MaxH = 450 }
)

foreach ($img in $imagesToResize) {
    $fullPath = $img.Path
    if (Test-Path $fullPath) {
        # Backup original
        $filename = [System.IO.Path]::GetFileName($fullPath)
        $backupPath = Join-Path $backupDir $filename
        if (-not (Test-Path $backupPath)) {
            Copy-Item $fullPath $backupPath
            Write-Host "Backed up original to: $backupPath"
        }
        
        # Resize
        Resize-Image -SourcePath $backupPath -DestinationPath $fullPath -MaxWidth $img.MaxW -MaxHeight $img.MaxH
    } else {
        Write-Host "File not found: $fullPath"
    }
}
