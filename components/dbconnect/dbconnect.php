<?php
$host='mysql-brisset-theo.alwaysdata.net';
$user='343614_brisset';
$passwd='fcad2024!';
$db='brisset-theo_moncine';

ini_set("display_errors",1);

$mysqliObject=new mysqli($host,$user,$passwd,$db);

$mysqliOk="";


if($mysqliObject->connect_errno){
	echo "Error N° ".$mysqliObject->connect_errno." , Msg : ".$mysqliObject->connect_error."<br>";
	exit();
} else {
	$mysqliOk="<span style=\"color:green;\">Connected to the database ".$db." on the server ".$host." with success</span><br>";
}

$mysqliObject->set_charset('utf8');
?>