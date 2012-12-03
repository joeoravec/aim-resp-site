<?php
try {
    $db_conn_rfs = new PDO('mysql:host=localhost;dbname=database','username', 'password');
	} catch (PDOException $e) {
		echo "Cound not connect to database";
	}
?>