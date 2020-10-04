<html>
	<head>
		<title>Pemrograman PHP</title>
	</head>

	<body>
		<h3>Sekarang adalah hari : 
<?php
$nama_hari = date("l");
if($nama_hari=="Sunday")
echo "Minggu";
elseif($nama_hari=="Monday")
echo "Senin<br>";
elseif($nama_hari=="Tuesday")
echo "Selasa<br>"; 
elseif($nama_hari=="Wednesday")
echo "Rabu<br>";
elseif($nama_hari=="Thursday")
echo "Kamis<br>";
elseif($nama_hari=="Friday")
echo "Jumat<br>";
else
echo "Sabtu";
Echo "</h3>";
?>

	</body>
</html>
