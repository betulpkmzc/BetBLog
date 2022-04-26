<?php 


try {

	$db=new PDO("mysql:host=93.89.225.50;dbname=vljbetul_travel;charset=utf8",'vljbetul_travelUSER','123456789betül.',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	 // echo "veritabani connection successful";
	
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>


