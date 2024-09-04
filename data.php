<?php
// Path to the JSON file
$file_path = 'data.json';

// Load the JSON data
$data = json_decode(file_get_contents($file_path), true);

// Output the JSON data for use in the HTML file
echo json_encode($data, JSON_PRETTY_PRINT);
?>

