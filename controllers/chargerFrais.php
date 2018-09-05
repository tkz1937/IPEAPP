<?php

require_once("../models/structure/connexiondb.class.php");
require_once('../models/dao/frais.dao.php');


$fraisDAO = new FraisDAO();
$resultat = $fraisDAO -> getFrais();
while($donnees =$resultat ->fetch())
 echo '<option value="'.$donnees['id'].'">'.$donnees['intitule'].' : '.$donnees['montant'].'</option>'; 
?>