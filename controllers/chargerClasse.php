<?php
include_once('../models/structure/connexiondb.class.php');
include_once('../models/structure/classe.class.php');
include_once('../models/dao/classe.dao.php');

$classDAO = new ClasseDAO();
$resultat = $classDAO ->getAllClasses();

while($donnees = $resultat ->fetch())
{
    echo '<option value="'.$donnees['id'].'">'.$donnees['nom_classe'].'</option>';
}
?>