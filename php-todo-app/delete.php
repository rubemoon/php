<?php
if (isset($_GET['index'])) {
    $index = $_GET['index'];

    // Load current tasks
    $tasks = json_decode(file_get_contents('tasks.json'), true) ?? [];

    // Remove the task at the given index
    if (isset($tasks[$index])) {
        unset($tasks[$index]);
        $tasks = array_values($tasks); // Re-index the array after deletion
    }

    // Save updated tasks back to the JSON file
    file_put_contents('tasks.json', json_encode($tasks));

    // Redirect back to the main page
    header('Location: index.php');
}
?>
