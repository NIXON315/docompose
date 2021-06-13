<h1>Hello World!!!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
// I assume that you've created a new username and password
/*$host = 'dockerapache_mysql_1';
$user = 'root';
$pass = '123456789';
$conn = new mysql($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected to MySQL successfully!";
}


mysql:host=127.0.0.1;port=3306;dbname=mysql;charset=utf8'
*/


/* Conectar a una base de datos de MySQL invocando al controlador */
//$dsn = 'mysql:dbname=asixcolar;host=dockerapache_mysql_1';

$dsn = 'mysql:dbname=asixcolar;port=3306;host=mysql';
$usuario = 'root';
$contraseña = '12345678';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}


?>
