<?php
// Path to the counter file
$counter_file = 'counter.txt';

// Check if the counter file exists
if (!file_exists($counter_file)) {
    // If it doesn't exist, create it and set initial count to 0
    file_put_contents($counter_file, '0');
}

// Read the current count from the file
$current_count = file_get_contents($counter_file);

// Increment the count
$new_count = intval($current_count) + 1;

// Write the new count back to the file
file_put_contents($counter_file, $new_count);

// Return the current count
echo $new_count;
?>
