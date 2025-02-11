<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
error_reporting(E_ERROR | E_PARSE);

// Validate and sanitize user input
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';

// Read the JSON data from file
$jsonData = file_get_contents('/var/www/html/certificates/data.json');
$data = json_decode($jsonData, true);

// Extract names from the JSON data
$names = array_column($data, 'Name');

// Check if the name exists in the data
if (in_array($name, $names)) {
    // Check if GD library is installed and enabled
    if (extension_loaded('gd') && function_exists('gd_info')) {
        // Load the background image
        $backgroundImagePath = '/var/www/html/certificates/cleanup_certificate_blank.png';

        // Validate if the file exists
        if (file_exists($backgroundImagePath)) {
            $backgroundImage = imagecreatefrompng($backgroundImagePath);

            // Set text color (white in this case)
            $textColor = imagecolorallocate($backgroundImage, 255, 255, 255);

            // Set shadow color (gray in this case)
            $shadowColor = imagecolorallocate($backgroundImage, 128, 128, 128);

            // Position and font settings for name
            $nameFont = '/var/www/html/certificates/Cinzel-SemiBold.ttf';
            $nameFontSize = 100;

            // Custom X and Y coordinates for text
            $textX = 485; // Adjust as needed
            $textY = 1200; // Adjust as needed

            // Add drop shadow effect to the text
            $shadowOffset = 4;
            imagettftext($backgroundImage, $nameFontSize, 0, $textX + $shadowOffset, $textY + $shadowOffset, $shadowColor, $nameFont, $name);

            // Add the name text to the background image
            imagettftext($backgroundImage, $nameFontSize, 0, $textX, $textY, $textColor, $nameFont, $name);

            // Set the content type header for displaying the image
            header('Content-Type: image/png');

            // Output the image directly to the browser
            imagepng($backgroundImage);

            // Clean up resources
            imagedestroy($backgroundImage);
        } else {
            // Background image file not found
            echo "Background image file not found.";
        }
    } else {
        // GD library is not installed or enabled
        echo "Sorry, the GD library is not installed or enabled.";
    }
} else {
    // Name not found in data.json
    echo "<div style='display: flex; align-items: center; justify-content: center; height: 100vh; font-size: 24px; font-weight: bold;'>";
    echo "Please write the full name to generate the certificate.";
    echo "</div>";
}
?>

