<?php

require_once("../models/structure/connexiondb.class.php");
require_once('../models/dao/categorie.dao.php');


$catDAO = new CategorieDAO();
$resultat = $catDAO -> getCategories();
while($donnees =$resultat ->fetch())
 echo '<option value="'.$donnees['id'].'">'.$donnees['intitule'].'</option>'; 
?>