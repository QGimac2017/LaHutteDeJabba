<?php 
  include 'db.inc.php';
  require_once("classes/Templater.class.php");
  
  try {
    $t = new Templater("");// A REMPLIR SELON LA PAGE
  } catch (Exception $e) {
    echo "Error : ".$e->getMessage();
  }

  /* Placer le code de récupération de données ici */



  /* Fin du code de récupération des données */

  
  $t->render();
?>