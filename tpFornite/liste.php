<form action="./admin.php">
<button>Accueil admin</button>
</form>
<?php require 'database.php';?>
<h3> Liste spawns : </h3>
    <table>
    <?php
    $reponse = $db->query('SELECT * FROM spawns;');
    $results = $reponse->fetchall();
    foreach ($results as $result) {
        echo "<tr><th>" . $result['name'] . "</th>" ;
        echo "<th><img src=images/". $result['image']. "></th></tr>";
    }
    ?>
</table>
<form action="javascript:history.go(-1)">
<button>Retour</button>
</form>