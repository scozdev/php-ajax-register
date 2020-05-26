$(function () {
  $(".btn").on("click", function (e) {
    // var kullanici_adi =  $('#kullanici_adi').val();
    // var kullanici_email =  $('#kullanici_email').val();
    // var kullanici_sifre =  $('#kullanici_sifre').val();

    var data = $("form").serialize();

    $.post('register.php', data + '&durum=ok', function(response){
        if(response){
           $('#kullanicihata').html(response.kullanicihata);
           $('#emailhata').html(response.emailhata);
           $('#sifrehata').html(response.sifrehata);
           $('#bilgi').html(response.hata);
           console.log(response);

        }
        if(response.basarili){
            $('#bilgi').html(response.basarili);
            $('#kullanicihata').html('');
            $('#emailhata').html('');
            $('#sifrehata').html('');
          
        }
    },'json');


  });
});
