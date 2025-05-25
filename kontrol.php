<?php
$email = $_POST['email'];
$sifre = $_POST['sifre'];

// Örnek kullanıcı bilgileri (gerçekte veritabanında olurdu)
$dogruEmail = "ahmetefetopcu4@gmail.com";
$dogruSifre = "34415353";

if ($email == $dogruEmail && $sifre == $dogruSifre) {
    echo "<h2>Hoş geldiniz, $email! 💖</h2>";
} else {
    echo "<h2>Hatalı giriş yapıldı. Lütfen tekrar deneyin.</h2>";
    echo "<a href='login.html'>Giriş sayfasına dön</a>";
}
?>
