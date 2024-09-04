<?php
// Path to the JSON file
$file_path = 'data.json';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the updated data from the form submission
    $updated_data = $_POST['data'];
    
    // Save the updated JSON data to the file
    file_put_contents($file_path, json_encode(json_decode($updated_data), JSON_PRETTY_PRINT));

    // Redirect back to the main page after saving
    header('Location: index.html');
    exit;
}
?>
