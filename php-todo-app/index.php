<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>To-Do List</h1>

    <!-- Form to add a new task -->
    <form action="add.php" method="POST">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>

    <!-- Display list of tasks -->
    <ul>
        <?php
            $tasks = json_decode(file_get_contents('tasks.json'), true) ?? [];
            foreach ($tasks as $index => $task) {
                echo "<li>$task <a href='delete.php?index=$index'>Delete</a></li>";
            }
        ?>
    </ul>
</body>
</html>
