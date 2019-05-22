<form action="./admin.php">
<button>Accueil admin</button>
</form>
<h3> Suppression spawns : </h3>
            <form action= "./deleteTraitement.php" method="post">
            <p>
                Nom de la ville à supprimer :
                <input type="str" name="name" placeholder="e.i: Tilted Towers"/>
                <input type="submit" value="Valider" />
            </p>
            </form>