$(document).ready(function(){
  $('.formulaire').submit(function(){
  var idproduit =$("#idproduit").val();
  var idproducteur =$("#idproducteur").val();
  var date_expiration =$("#date_expiration").val();
  var date_certification =$("#date_certification").val();

  alert(nom + message);

    $.post('envoi.php', {idproduit:idproduit, idproducteur:idproducteur, date_expiration:date_expiration, date_certification:date_certification}, function(donnees){
        $('.return').text(donnees);
        $('#idproduit').val('');
        $('#idproducteur').val('');
        $('#date_expiration').val('');
        $('#date_certification').val('');
    });
    return false;
  });
});
