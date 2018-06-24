$(document).ready(function(){

    alert("suis-là");

    $('#formulaire').submit(function(){

        var nom = $('#nom').val();
        var postnom = $('#postnom').val();
        var prenom = $('#prenom').val();
        var date_naissance= $('#date_naissance').val();
        var lieu = $('#lieu_naissance').val();
        var classe = $('#classe').val();
        var adresse = $('#adresse').val();
        var responsable = $('#responsable').val();
        var tele_responsable = $('#tele_responsable').val();
        var adresse_responsable = $('#adresse_responsable').val();
        var niveau = $('#niveau').val();
        var genre = $('#genre').val();
        var nationalite = $('#nationalite').val();

        alert(nom+" "+genre+" "+date_naissance+" "+niveau+" "+classe);

    });

});