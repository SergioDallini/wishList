<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <title>Список дел</title>
</head>
<body>
<div class="container">
    <h1>Список дел</h1>
    <form action="/add.php" method="post">
        <input type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control mb-4">
        <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
    </form>

    <?php
    require_once ('config.php');
    echo '<ul>';
    $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"></a><button>Удалить</button></li>';
    }
    echo '</ul>';
    ?>
</div>
</body>
</html>
<?php
