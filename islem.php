<?php
require 'vt.php';
$vt = new Veritabani();
if(isset($_POST['kgiris'])){
    $giris=$vt->Giris($_POST['kadi'],$_POST['sifre'],'kullanici');
    if($giris!=null){
        $_SESSION['hgiris']=null;
        $_SESSION['kgiris']=$giris;
        header("Location: index.php?GirisBasarili");
    }
    else header("Location: giris.php?HataliGiris");
}
else if(isset($_POST['hgiris'])){
    $giris=$vt->Giris($_POST['kadi'],$_POST['sifre'],'hastane');
    if($giris!=null){
        $_SESSION['hgiris']=$giris;
        $_SESSION['kgiris']=null;
        header("Location: index.php?GirisBasarili");
    }
    else header("Location: giris.php?HataliGiris");
}
if(isset($_POST['hastanekayit'])){
    $vt->HastaneKayit($_POST['ad'],$_POST['sifre'],$_POST['adres'],$_POST['il'],$_POST['ilce'],$_POST['telefon']);
}
if(isset($_POST['kullanicikayit'])){
    $vt->KullaniciKayit($_POST['kadi'],$_POST['sifre'],$_POST['ad'],$_POST['soyad'],$_POST['adres']
    ,$_POST['il'],$_POST['ilce'],$_POST['kangrubu'],$_POST['ilac'],$_POST['sigara'],$_POST['alkol']);
}   
foreach ($vt->DiziDondur("SELECT id FROM kullanici",array("id")) as $id) {
    if(isset($_POST[$id[0]])){
        $vt->BulteneAktar($id[0],$_SESSION['hgiris']['telefon']);
        break;
    }
}
if(isset($_POST['mesajgonder'])){
    $mesaj = $_POST['mesaj'];
    $vt->QueryCalistir("INSERT INTO mesajlar(mesaj,gonderilmezamani) VALUES('$mesaj',CURDATE())");
    header("Location: index.php?MesajGonderildi");
}