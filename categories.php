<?php 
  include 'db.inc.php';
  require_once("classes/Templater.class.php");
  require_once("models/category.model.php");
  
  try {
    $t = new Templater("categories");// A REMPLIR SELON LA PAGE
  } catch (Exception $e) {
    echo "Error : ".$e->getMessage();
  }

  /* Placer le code de récupération de données ici */

  /*$categories = array();
  foreach($db->query("SELECT name FROM Categories") as $category) {
    $categories[] = $category['name'];
  }
  $t->categories = $categories;*/

  
  $category = new Category($db);
  $t->category = $category->getById(1);



  /* Fin du code de récupération des données */

  $t->render();
?>