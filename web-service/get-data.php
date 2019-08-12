<?php 
//retrieve the data from database table

//lets pretend this comes from user
if(isset($_GET['prod-id'])){
	$prodId = $_GET['prod-id'];

	//SQL for web server means nothing more than any other string
	$q = "SELECT * FROM `products` WHERE `prod_code` = ?";

	//prepare() method gets the ready
	//for the datbase server
	$prepared = $pdo->prepare($q);

	//replace placeholders with values
	$prepared->bindParam(1, $prodId);

	//perform database query
	$prepared->execute();

	//extract the data from our $prepared object
	$items = $prepared->fetchAll(PDO::FETCH_ASSOC);
}else{
	$q = "SELECT * FROM `products`";

	//prepare() method gets the ready
	//for the datbase server
	$prepared = $pdo->prepare($q);

	//perform database query
	$prepared->execute();

	//extract the data from our $prepared object
	$items = $prepared->fetchAll(PDO::FETCH_ASSOC);
}

//print_r($items);





?>