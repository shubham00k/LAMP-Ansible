<!DOCTYPE html>
<html>
<head>
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>To-Do List</h1>
    <form method="POST">
        <input type="text" name="task" placeholder="Enter a task" required>
        <button type="submit">Add Task</button>
    </form>
    <ul>
    <?php
    $file = 'tasks.txt';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $task = $_POST['task'] . "\n";
        file_put_contents($file, $task, FILE_APPEND);
    }
    if (file_exists($file)) {
        $tasks = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($tasks as $task) {
            echo "<li>$task</li>";
        }
    }
    ?>
    </ul>
</body>
</html>