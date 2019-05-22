<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php session_name('randomSpawn');
            session_start();
        if (isset($_SESSION['current_spawn']))
        {
            $_SESSION['previous_spawn'] = $_SESSION['current_spawn'];
        }
        require 'database.php';
        $req = $db-> prepare('SELECT * FROM spawns');
        $req->execute();
        $cities = $req->fetchAll();
    ?>

    <form method="POST">
        <button class="btn-href" name="submit"> Prendre un spawn aléatoire</button>
    </form>
    <a class="test" href="./login.php">Connection</a>

    <?php
        $random = array_rand($cities);
        $city = $cities[$random];

        while ($city['name'] == $_SESSION['previous_spawn']['name'])
        {
            $random = array_rand($cities);
            $city = $cities[$random];
            
        }

        $_SESSION['current_spawn'] = $city;
    ?>
<h1><?php echo $city['name']; ?></h1>
<img src=images/<?php echo $city['image']; ?>>
</body>
</html>