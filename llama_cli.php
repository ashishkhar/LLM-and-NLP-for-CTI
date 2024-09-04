<?php
// Set the content type to text/event-stream
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');

// Check if this is a stop request
if (isset($_GET['action']) && $_GET['action'] === 'stop') {
    // Stop the background process
    exec("pkill -f 'llama-cli'");
    echo "data: Process stopped.\n\n";
    exit();
}

// Set the content type to text/event-stream
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

// Command to be executed
$command = '/usr/local/bin/llama-cli --color -m /Users/ashishkharbanda/.cache/lm-studio/models/unsloth/untitled\ folder/unsloth.Q8_0.gguf -f prompt.txt --in-file input.txt -c 2148 -t 4 -ngl -1';

// // Execute the Python script
// $output = shell_exec($command . " 2>&1");

// // Display the output
// echo "<pre>$output</pre>";


// Open a process and capture the output
$process = popen($command, 'r');
//print($process);
// Check if the process was opened successfully
if (is_resource($process)) {
    // Continuously read and output the command's output
    while (!feof($process)) {
        $output = fgets($process);
        echo "data: {$output}\n\n";
        // Flush the output buffer
        ob_flush();
        flush();
    }
    // Close the process resource
    pclose($process);
}

echo "data: Process completed.\n\n";
// Ensure that the event source is kept alive until the process is done
ob_flush();
flush();
?>



