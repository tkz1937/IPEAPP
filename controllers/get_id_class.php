<?php
    if(isset($_POST['classe'])){
        $id_classe=$_POST['classe'];
        header('Location:../views/liste_eleve_classe.php?id'.$id_classe);
    }else{
        echo"erreur";
    }
?>