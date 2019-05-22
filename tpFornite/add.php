<form action="./admin.php">
<button>Accueil admin</button>
</form>
<h3> Ajout spawns : </h3>
            <form action= "./addTraitement.php" method="post">
            <p>
                Nom de la ville :
                <input type="str" name="name" placeholder="e.i: Tilted Towers"/>
                Image de la ville :
                <input type="str" name="image" placeholder="e.i: tilted_towers.jpg">
                <input type="submit" value="Valider" />
            </p>
            </form>