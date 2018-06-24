$(document).ready(function(){

  $('.login-form').submit(function(){
  var nom_complet =$("#nomcomplet").val();
  var adresse =$("#adresse").val();
  var email =$("#email").val();
  var nationalite =$("#nationalite").val();
  var photo =$("#photo").val();
  var telephone = $('#telephone').val();


  alert(nom_complet + email + photo);

    $.post('envoi.php', {email:email,nom_complet:nom_complet, adresse:adresse,telephone:telephone, nationalite:nationalite, photo:photo  }, function(donnees){
        $('.return').text(donnees);
        alert(donnees);
        $('#nomcomplet').val('');
        $('#adresse').val('');
        $('#nationalite').val('');
        $('#telephone').val('');
        $('#photo').val('');
        $('#email').val('');

    });
    return false;
  });
});
