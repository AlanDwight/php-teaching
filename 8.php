<?php

//  Checking Request Method (API or Form Validation)
 
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data securely
}

//  Redirecting to HTTPS

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('Location: ' . $redirect);
    exit;
}

// Inspecting All Available Keys

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

?>