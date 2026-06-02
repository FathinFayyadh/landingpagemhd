<?php
echo "GD Support: " . (extension_loaded("gd") ? "Yes" : "No") . "\n";
echo "Imagick Support: " . (extension_loaded("imagick") ? "Yes" : "No") . "\n";

$images = [
    "public/landingpage/assets/images/profilhuman.png",
    "public/landingpage/assets/images/visi-misi.png",
    "public/landingpage/assets/images/misi.jpg",
    "public/landingpage/assets/images/vis.jpg",
    "public/landingpage/assets/images/visii.jpg",
    "public/landingpage/assets/images/about/about-profil.png",
];

foreach ($images as $img) {
    if (file_exists($img)) {
        $size = getimagesize($img);
        $fileSize = filesize($img);
        echo $img . ": " . ($size ? $size[0] . "x" . $size[1] : "unknown") . " (" . round($fileSize/1024, 2) . " KB / " . round($fileSize/1024/1024, 2) . " MB)\n";
    } else {
        echo $img . " not found\n";
    }
}
