<?php
// Configurações do banco de dados
$servername = "localhost"; // Nome do servidor MySQL
$username = "dba"; // Nome de usuário do MySQL
$password = "Diego@2022"; // Senha do MySQL
$database = "banco_php"; // Nome do banco de dados

$conn = new MySQLi($servername, $username,$password, $database);
if($conn->connect_error){
   echo "Desconectado! Erro: " . $conn->connect_error;
}
?>
