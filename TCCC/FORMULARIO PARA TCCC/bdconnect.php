<?php
$servername = "localhost";
$database = "tcccc";
$username = "root";
$password = "";

//Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

//Checando conexão
if (!$conn) {
    die("Falha na conexão: " . mysli_connect_error());
}
else{
    echo "Rodou";
}
//echo "conexão feita";
?>