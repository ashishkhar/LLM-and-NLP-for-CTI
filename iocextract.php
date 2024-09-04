<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Define the command
 $command = escapeshellcmd("/opt/anaconda3/bin/iocextract --extract-emails --extract-urls --extract-yara-rules --extract-hashes -i input.txt --output indicators.txt");

 // Execute the Python script
 $output = shell_exec($command . " 2>&1");
 
 // Display the output
 //echo "<pre>$output</pre>";
}
//  // Redirect back to the index.html page
 header("Location: index.html");
 exit();
?>
