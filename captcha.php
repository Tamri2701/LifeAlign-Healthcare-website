<?php
session_start();

// Generate a more secure 6-character captcha
$captcha = strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));
$_SESSION['captcha'] = $captcha;

// Create the image
header('Content-type: image/png');
$image = imagecreate(120, 40); // Increased width for better text spacing

// Colors for the image
$bg = imagecolorallocate($image, 255, 255, 255); // Background color (white)
$textColor = imagecolorallocate($image, 0, 0, 0); // Text color (black)

// Add noise (random lines)
for ($i = 0; $i < 5; $i++) {
    $lineColor = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
    imageline($image, rand(0, 120), rand(0, 40), rand(0, 120), rand(0, 40), $lineColor);
}

// Add captcha text to the image
imagestring($image, 5, 30, 10, $captcha, $textColor);

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?>
