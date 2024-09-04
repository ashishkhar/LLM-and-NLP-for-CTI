<?php
// Read the process ID from the file
$pid = @file_get_contents('/tmp/llama_pid.txt');

if ($pid) {
    // Use the 'kill' command to terminate the process
    shell_exec("kill -9 " . escapeshellarg($pid));

    // Remove the PID file
    unlink('/tmp/llama_pid.txt');

    echo "Process $pid terminated.";
} else {
    echo "No process to terminate.";
}
?>
