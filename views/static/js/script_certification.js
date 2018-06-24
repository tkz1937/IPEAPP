$(document).ready(function(){
  $('.formulaire').submit(function(){
  var id_produit =$("#id_produit").val();
  var id_producteur =$("#id_producteur").val();
  var date_expiration =$("#date_expiration").val();
  var date =$("#date").val();

  alert(date_expiration);

    $.post('../../../controllers/add_certification.php', {id_produit:id_produit, id_producteur:id_producteur, date_expiration:date_expiration, date:date}, function(donnees){
        $('.return').text(donnees);

        $('#id_produit').val('');
        $('#id_producteur').val('');
        $('#date_expiration').val('');
        $('#date').val('');
    });
    return false;
  });
});
