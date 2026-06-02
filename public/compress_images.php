<?php
// Prevent timeout
ini_set('max_execution_time', 300);

function resizeImage($source, $dest, $maxWidth, $maxHeight) {
    if (!file_exists($source)) {
        echo "Source file not found: $source<br>";
        return false;
    }
    
    $info = getimagesize($source);
    if (!$info) {
        echo "Invalid image info for: $source<br>";
        return false;
    }
    
    list($width, $height, $type) = $info;
    
    // Calculate aspect ratio
    $ratio = min($maxWidth / $width, $maxHeight / $height);
    if ($ratio > 1) {
        $ratio = 1; // Do not upscale
    }
    
    $newWidth = (int)($width * $ratio);
    $newHeight = (int)($height * $ratio);
    
    // Create new image resource
    $newImg = imagecreatetruecolor($newWidth, $newHeight);
    
    // Handle transparency for PNGs
    if ($type == IMAGETYPE_PNG) {
        imagealphablending($newImg, false);
        imagesavealpha($newImg, true);
        $sourceImg = imagecreatefrompng($source);
    } elseif ($type == IMAGETYPE_JPEG) {
        $sourceImg = imagecreatefromjpeg($source);
    } else {
        echo "Unsupported image type for: $source<br>";
        return false;
    }
    
    if (!$sourceImg) {
        echo "Failed to create image resource from: $source<br>";
        return false;
    }
    
    // Resample
    imagecopyresampled($newImg, $sourceImg, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
    
    // Save
    if ($type == IMAGETYPE_PNG) {
        // PNG compression level 9 (highest compression)
        imagepng($newImg, $dest, 9);
    } else {
        // JPEG quality 85%
        imagejpeg($newImg, $dest, 85);
    }
    
    imagedestroy($newImg);
    imagedestroy($sourceImg);
    
    echo "Resized: $source to $dest ($newWidth x $newHeight)<br>";
    return true;
}

// Ensure working directory is public
chdir(__DIR__);

// Backup first
$backupDir = 'landingpage/assets/images_backup';
if (!is_dir($backupDir)) {
    mkdir($backupDir, 0777, true);
}

$images = [
    [
        'source' => 'landingpage/assets/images/profilhuman.png',
        'maxWidth' => 600,
        'maxHeight' => 600
    ],
    [
        'source' => 'landingpage/assets/images/about/about-profil.png',
        'maxWidth' => 600,
        'maxHeight' => 400
    ],
    [
        'source' => 'landingpage/assets/images/visi-misi.png',
        'maxWidth' => 600,
        'maxHeight' => 400
    ],
    [
        'source' => 'landingpage/assets/images/misi.jpg',
        'maxWidth' => 600,
        'maxHeight' => 450
    ],
    [
        'source' => 'landingpage/assets/images/vis.jpg',
        'maxWidth' => 600,
        'maxHeight' => 450
    ],
    [
        'source' => 'landingpage/assets/images/visii.jpg',
        'maxWidth' => 600,
        'maxHeight' => 450
    ]
];

echo "<h2>Starting Image Compression...</h2>";

if (!extension_loaded('gd')) {
    echo "<font color='red'>Error: GD library is not enabled in your PHP server config. Please enable extension=gd in php.ini.</font><br>";
    exit;
}

foreach ($images as $img) {
    $src = $img['source'];
    $filename = basename($src);
    
    // For nested about-profil, let's keep it clean
    if (strpos($src, 'about/') !== false) {
        $backupPath = $backupDir . '/about-' . $filename;
    } else {
        $backupPath = $backupDir . '/' . $filename;
    }
    
    if (file_exists($src)) {
        if (!file_exists($backupPath)) {
            copy($src, $backupPath);
            echo "Backed up original to: $backupPath<br>";
        }
        
        // Compress using the backup copy as source so we can run multiple times without degrading quality
        resizeImage($backupPath, $src, $img['maxWidth'], $img['maxHeight']);
    } else {
        echo "File not found: $src<br>";
    }
}

echo "<h3>Done!</h3>";
