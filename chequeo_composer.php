<?php
$output = shell_exec('composer --version');
if ($output) {
    echo "Composer is installed: " . $output;
} else {
    echo "Composer is not installed.";
}
?>