$(document).ready(function(){

  $('.login-form').submit(function(){
  var intitule =$("#intitule").val();
  var type =$("#type").val();
  var date_enregistrement =$("#date_enregistrement").val();

  alert(intitule + type+date_enregistrement);

    $.post('../../../controllers/add_produit.php', {intitule:intitule, type:type, date_enregistrement:date_enregistrement}, function(donnees){
        $('.return').text(donnees);
        $('#intitule').val('');
        $('#type').val('');
        $('#date_enregistrement').val('');
    });
    return false;
  });
});
