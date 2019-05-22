<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require 'database.php';
$req = $db-> prepare('SELECT * FROM users');
$req->execute();
$results = $req->fetchAll();

if((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password'])))
{
    foreach($results as $result){
        if ($_POST['username'] == $result['user'] && $_POST['password'] == $result['password'])
        {
        header('Location: ./admin.php');
        exit();
    }else{
        echo '<p>Identifiant invalide</p>';;
    }
    }
    
}else{
    echo '<p>Veuillez rentrer une valeur</p>';;
}
?>
<form action="javascript:history.go(-1)">
    <button>Retour</button>
</form>
</body>
</html>