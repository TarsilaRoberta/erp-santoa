<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'santoa';

$conexao = new mysqli($host, $user, $pass, $db);
$conexao->set_charset('utf8');