<?php 
$dsn = "mysql:host=localhost;dbname=final_1531";
$un="root";
$pw = "";

//PDO stands for PHP DATA OBJECT
try {
	$pdo = new PDO($dsn, $un, $pw);
} catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
}
?>