<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input text from the form
    $inputText = $_POST['inputText'];

    // Define the filename
    $filename = 'input.txt';

    // Save the input text to a file
    if (file_put_contents($filename, $inputText) === false) {
        echo "Failed to write to file.";
    } else {
        echo "File written successfully.<br>";
    }

    // Define the command
    $command = escapeshellcmd("/opt/anaconda3/bin/python3 stix-tools/stix_create_v2.py --merge data.json -i input.txt");

    // Execute the Python script
    $output = shell_exec($command . " 2>&1");

    // Display the output
    //echo "<pre>$output</pre>";
}

 // Redirect back to the index.html page
 header("Location: index.html");
 exit();
?>
