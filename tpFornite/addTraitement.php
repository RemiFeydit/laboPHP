<?php
        require 'database.php';
        if((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['image']) && !empty($_POST['image'])))
        {
            $name = $_POST['name'];
            $image = $_POST['image'];
            $reponse = $db->query('SELECT * FROM spawns');
            $results = $reponse->fetchall();
            foreach ($results as $result) {
                if ($result['name'] == $name){
                    echo('<h2>La ville existe déjà</h2>');
                    echo "<form><input type='button' value='Retour' onClick='history.back()'></form>";
                    $spawnInDB = true;
                    break;
                }else{
                    $spawnInDB = false;
                }
            }
            if($spawnInDB == false){
                $req = $db->prepare('INSERT INTO spawns (name, image) VALUES ("'.$name.'", "'.$image.'")');
                $req->execute();
                echo 'Vos infos ont été ajoutés';
                echo "<form><input type='button' value='Retour' onClick='history.back()'></form>";
            }   
        }else{
            echo "<h2>Au moins un champ n'est pas rempli.</h2>";
            echo "<form><input type='button' value='Retour' onClick='history.back()'></form>";
    }
    ?>