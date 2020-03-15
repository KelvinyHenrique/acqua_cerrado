<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */


try {
    $username = "u378688217_zbx";
$password = "48263590+l";
    $pdoConn = new PDO('mysql:host=45.87.80.52;dbname=u378688217_data', $username, $password);
    $pdoConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

 ?>