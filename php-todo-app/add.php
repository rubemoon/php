<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];

    // Load current tasks
    $tasks = json_decode(file_get_contents('tasks.json'), true) ?? [];

    // Add new task to the array
    $tasks[] = $task;

    // Save updated tasks back to the JSON file
    file_put_contents('tasks.json', json_encode($tasks));

    // Redirect back to the main page
    header('Location: index.php');
}
?>
