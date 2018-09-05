<?php
include_once('../models/structure/connexiondb.class.php');
require_once('../models/dao/display.dao.php');

if(isset($_POST['classe'])){

    $id_classe = $_POST['classe'];

    $displayDAO = new displayDAO();
    $resultat = $displayDAO ->afficherEleveParClasse($id_classe);
    
    while($donnees = $resultat ->fetch())
    {
        echo '<option value="'.$donnees['id'].'">'.$donnees['nom_classe'].'</option>';
    }


}


?>