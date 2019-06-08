<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p><button onClick="window.location.href='./index.php';" style="width:130px">Accueil</button></p>
<?php

// Pokémon
include_once './pokemon/carapuce.php';
include_once './pokemon/salameche.php';
include_once './pokemon/bulbizarre.php';

// Pokeball
include_once './usable/pokeball/pokeball.php';
include_once './usable/pokeball/superball.php';
include_once './usable/pokeball/hyperball.php';
include_once './usable/pokeball/masterball.php';

// Potion
include_once './usable/potion/potion.php';
include_once './usable/potion/superpotion.php';
include_once './usable/potion/hyperpotion.php';
include_once './usable/potion/potionmax.php';

// Création des Pokémons
$carapuce = new carapuce(5);
$salameche = new salameche(8);

//Création des Potions 
$superpotion = new superpotion();

// Création des Pokéballs
$pokeball = new pokeball();

// Assignation des variables
$usePokeball = 0;
$useSuperPotion = 0;
$nbTours = 1;
$maxUsePotion = 2;
$maxUseSuperPotion = 1;
$maxUsePokeball = 3;
$matchOn=true;
?>


<?php do{ ?>
    <h1> Tours : <?php echo $nbTours;?> </h1>

    <?php   if($salameche->life < $salameche->maxLife*0.8)
            {
            if($usePokeball != $maxUsePokeball)
            {
                $pokeball->use($salameche);
                $usePokeball += 1;
                if($salameche->isCaptured == true){?>
                    <h1>Fin du match, <?php echo $salameche->namePokemon;?> est attrapé !! </h1> 
              <?php break;
                }
            }else{
                $salameche->takeDamage($carapuce->attack());
            }
        }else{
            $salameche->takeDamage($carapuce->attack());
        }

    $carapuce->takeDamage($salameche->attack());

    if($carapuce->life == 0)
    {
        $matchOn = false;?>
        <h1> <?php echo $carapuce->namePokemon;?> est KO.</h1>
    <?php }

    if($salameche->life == 0)
    {
        $matchOn = false;?>
        <h1> <?php echo $salameche->namePokemon; ?> est KO.</h1>
    <?php }


    $nbTours += 1;
}while($matchOn)

?>
<button value="Retry" onClick="window.location.reload();">Retry</button>
    
</body>
</html>
<?php
