$(document).ready(function(){

  $('.formulaire').submit(function(){
  var intitule =$("#intitule").val();
  var type =$("#type").val();
  var date_enregistrement =$("#date_enregistrement").val();

  alert(intitule + type+date_enregistrement);

    $.post('envoi.php', {intitule:intitule, type:type}, function(donnees){
        $('.return').text(donnees);
        $('#intitule').val('');
        $('#type').val('');
        $('#date_enregistrement').val('');
    });
    return false;
  });
});
