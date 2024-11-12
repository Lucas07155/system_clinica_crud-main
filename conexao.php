<?php
$pdo = new PDO("mysql:dbname=clinica_saude;host=localhost;port=3307", "root", "lucas123");
if (!$pdo) {
    echo "Acesso negado!";
} 
?>