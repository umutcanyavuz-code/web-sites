<?php
$serverName = "localhost"; // veya IP:PORT
$connectionOptions = array(
    "Database" => "okul",
    "Uid" => "sa",
    "PWD" => "12345",
    "CharacterSet" => "UTF-8" // Türkçe karakter desteği için
);

// Bağlantı oluştur
 $conn =sqlsrv_connect($serverName, $connectionOptions); 
 if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));  // Bağlantı hatası varsa göster
}

// Bağlantıyı kontrol et
if ($conn) {
    echo "Bağlantı başarılı!";
} else {
    echo "Bağlantı başarısız!<br>";
    die(print_r(sqlsrv_errors(), true));
}
?>
