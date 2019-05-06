<?php include_once('head.php');?>
<h2>Bordeaux</h2>
<?php for ($jour = 0; $jour < 5; $jour++) { ?>
   <p>J+<?php echo $jour; ?></p>
   <a href="https://www.prevision-meteo.ch/meteo/localite/bordeaux">
	<img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_<?php echo $jour; ?>.png" width="650" height="250"/>
   </a>
<?php } ?>
