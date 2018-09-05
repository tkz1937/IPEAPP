<?php
require_once("../models/structure/connexiondb.class.php");
require_once("../models/structure/categorie.class.php");
require_once("../models/dao/categorie.dao.php");
if(isset($_POST['intitule'],$_POST['description'])){
    $description=$_POST['description'];
    $intitule=$_POST['intitule'];
    $categorie=new Categorie(0,$description,$intitule);
    $catDAO=new CategorieDAO();
    echo $categorie->getDescription().
    $categorie->getIntitule();
    $res=$catDAO->ajouterCategorie($categorie);
    if($res)
        header('Location:..');
    echo"erreur";
}
else
 echo "erreur";
?>