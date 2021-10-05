<?php
$task = trim($_POST['task']);
if($task == ''){
    exit("Введите задание");
}

require_once ('config.php');

$sql = 'INSERT INTO tasks(task) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location: /');