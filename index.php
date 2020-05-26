<?php require 'db.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">


    <title>Document</title>
</head>

<body>

    <div class="container">
        <form action="" method="post" id="form" onsubmit="return false">
            <h1 style="padding: 5px 0">Kayıt Ol</h1>

            <div class="form-group">
                <div class="col-25">
                    <label for="">Kullanıcı Adı :</label>
                </div>
                <div class="col-75">
                    <input class="form-control" name="kullanici_adi" id="kullanici_adi" type="text" placeholder="Kullanıcı adi">
                    <label for="" id="kullanicihata" class="hata1"></label>

                </div>
            </div>
            <div class="form-group">
                <div class="col-25">
                    <label for="">Email :</label>
                </div>
                <div class="col-75">
                    <input class="form-control" name="kullanici_email" id="kullanici_email" type="text" placeholder="Email">
                    <label for="" id="emailhata" class="hata1"></label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-25">
                    <label for="">Şifre :</label>
                </div>
                <div class="col-75">
                    <input class="form-control" name="kullanici_sifre" id="kullanici_sifre" type="text" placeholder="Şifre">
                    <label for="" id="sifrehata" class="hata1"></label>

                </div>
            </div>
            <div id="bilgi" class="hata1"></div>
            <button type="submit" class="btn" value="1" id="gonder">Kaydol</button>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="ajax.js"></script>
</body>

</html>