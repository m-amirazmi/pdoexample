<?php
	$host = 'localhost';
	$user = 'root';
	$dbname = 'pdoposts';
	$password = '';

	// Set DSN (data source name)
	$dsn = 'mysql:host='. $host . ';dbname='. $dbname;

	// Create PDO instance
	$pdo = new PDO($dsn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

	#PDO Query
	$stmt = $pdo->query('SELECT * FROM posts');
	// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	// 	echo $row['title'] . '<br>'; 
	// }

	// while($row = $stmt->fetch()){
	// 	echo $row->title . '<br>'; 
	// }

	#PREPARED STATEMENTS (prepare & execute)
	// UNSAFE
	$sql = "SELECT * FROM posts WHERE author = '$author'";