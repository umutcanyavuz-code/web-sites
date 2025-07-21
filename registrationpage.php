<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href="anasayfa.php">Anasayfa</a>
    <a href="sayfa.php">sayfa1</a>
    <a href="kayıtsayfası.php">sayfa2</a>
    <h1>sayfa 2 desin</h1>

    <form action="kayıtsayfası.php" method="post">
     <label for="isim">Adınız:</label><br>
     <input type="text" id="isim" name="isim" required><br><br>

     <label for="email">E-posta:</label><br>
     <input type="email" id="email" name="email" required><br><br>

     <label for="mesaj">Mesajınız:</label><br>
     <textarea id="mesaj" name="mesaj" rows="5" cols="30" required></textarea><br><br>

     <input type="submit" value="Gönder">
    </form>
</body>
</html>
<?php


include("baglanti.php");//bu sayfamızı db e bagladık baglantı.php aracılıgı ile 
if(isset($_POST["isim"],$_POST["email"],$_POST["mesaj"]))//$_POST["isim"] ile gelen post verisini alıyor
//isset methodu dolu mu bos mu diye bakıyor
//eger hepsi dolu ise if in içi çalışıyor
{
    $gisim=$_POST["isim"];
    $gemail=$_POST["email"];
    $gmesaj=$_POST["mesaj"];

    $ekle="INSERT INTO tablom3 (ad,  cinsiyet) VALUES ('".$gisim."', '".$gemail."');"; //db ye veri ekler   
    $sil="DELETE FROM tablom3 WHERE cinsiyet = 'umutcan.yavuz@std.izmirekonomi.edu.tr';";// db den veri siler
 
  $stmt = sqlsrv_query($conn, $ekle);//sonuc doğru ise nesne olarak döner
 $stmt = sqlsrv_query($conn, $sil);
  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));  // Sorgu hatası varsa göster
}else{
    header("Location: anasayfa.php");
}
  

}



?>
