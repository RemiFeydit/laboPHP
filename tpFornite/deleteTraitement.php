<?php
        require 'database.php';
        if((isset($_POST['name']) && !empty($_POST['name'])))
        {
            $name = $_POST['name'];
            $reponse = $db->query('SELECT * FROM spawns');
            $results = $reponse->fetchall();
            foreach ($results as $result) {
                if ($result['name'] == $name){
                    echo 'Vos infos ont été supprimé';
                    echo "<form><input type='button' value='Retour' onClick='history.back()'></form>";
                    $spawnInDB = true;
                    $req = $db->prepare("DELETE FROM spawns WHERE name = '$name'");
                    $req->execute();
                }else{
                    $spawnInDB = false;
                }
            }
            if($spawnInDB == false){
                echo('<h2>La ville n\'existe pas</h2>');
                echo "<form><input type='button' value='Retour' onClick='history.back()'></form>";
            }
        }else{
            echo "<h2>Au moins un champ n'est pas rempli.</h2>";
            echo "<form><input type='button' value='Retour' onClick='history.back()'></form>";
    }
    ?>