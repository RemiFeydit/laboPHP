<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Page météo</title>
<?php $heure = date('G');?>
<?php if($heure > 7 && $heure < 19){
echo '<style>
   body{
       color: black;
       background-color: white;
       }
</style>';
}else{ 
  echo '<style>
     body{
        color: white;
        background-color: #1f253a;
        }
  </style>';
}?>
</head>
