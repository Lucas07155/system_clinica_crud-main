<?php
$pdo = new PDO("mysql:dbname=clinica_saude;host=localhost;port=3306", "root", "cimatec");
if (!$pdo) {
    echo "Acesso negado!";
} 
?>