$(document).ready(function(){
  $('.formulaire').submit(function(){
  var nom =$("#nom").val();
  var message =$("#message").val();

  alert(nom + message);

    $.post('envoi.php', {nom:nom, message:message}, function(donnees){
        $('.return').text(donnees);
        $('#nom').val('');
        $('#message').val('');
    });
    return false;
  });
});
