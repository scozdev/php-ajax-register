<?php

require 'db.php';
$sonuc = [];

if (isset($_POST['durum'])) {

    $kullanici_adi = $_POST['kullanici_adi'] ? $_POST['kullanici_adi'] : false;
    $kullanici_email = $_POST['kullanici_email'] ? $_POST['kullanici_email'] : false;
    $kullanici_sifre = $_POST['kullanici_sifre'] ? $_POST['kullanici_sifre'] : false;

    if (!$kullanici_adi) {
        $sonuc['kullanicihata'] = 'ad boş olamaz';
    } else if (!$kullanici_email) {
        $sonuc['emailhata'] = 'kullanici_email boş olamaz';
    } else if (!filter_var($kullanici_email, FILTER_VALIDATE_EMAIL)) {
        $sonuc['emailhata'] = 'mail format hata';
    } else if (!$kullanici_sifre) {
        $sonuc['sifrehata'] = 'şifre boş olamaz';
    } else {

        $query = $db->prepare('select * from kayit where kullanici_adi=:kullanici_adi || kullanici_email=:kullanici_email');
        $query->execute([
            'kullanici_adi' => $kullanici_adi,
            'kullanici_email' => $kullanici_email
        ]);
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $sonuc['hata'] = 'Kullanici zaten var';
        } else {

            $query = $db->prepare('INSERT INTO kayit SET kullanici_adi = :kullanici_adi, kullanici_email = :kullanici_email, kullanici_sifre = :kullanici_sifre');
            $result = $query->execute([
                'kullanici_adi' => $kullanici_adi,
                'kullanici_email' => $kullanici_email,
                'kullanici_sifre' => $kullanici_sifre
            ]);

            if ($result) {
                $sonuc['basarili'] = 'Başarıyla kayıt oldunuz giriş yapabilirsiniz..';
            } else {
                $sonuc['hata'] = 'Bir sorun oluştu';
            }
            // 
        }
    }
}
echo json_encode($sonuc);
