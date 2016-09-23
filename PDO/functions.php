<?php
require('config.php'); 

$id = '3';

try {

	$conn = new PDO('mysql:host=localhost;dbname=practices',$config['DB_USERNAME'],$config['DB_PASSWORD']); 

	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// $results = $conn->query('SELECT * FROM users WHERE id = '.$conn->quote($id));

	$stmt = $conn->prepare('SELECT * FROM users WHERE username LIKE "R%"');
	// $stmt->execute(array('id' => $id)); 
	$stmt->bindParam(':id',$id, PDO::PARAM_INT); 
	$stmt->execute(); 

	while ($row = $stmt->fetch()) {
		print_r($row);
	}

} catch (PDOException $e) {
	echo 'ERROR: '.$e->getMessage();
}