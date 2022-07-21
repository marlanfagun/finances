<?php
//CONEXAO PDO
date_default_timezone_set('America/Sao_Paulo');

//CONEXAO LOCAL
$usuario = 'masfa';
$senha = 'masfa@123';
$banco = 'finances';
$servidor = '127.0.0.1';

//CONEXAO SERVIDOR NUVEM
// $usuario = 'galacom_ti';
// $senha = '4JQYB=?23Q~#';
// $banco = 'galacom_sac';
// $servidor = 'localhost';

try {
  $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'A conexão falhou: ' . $e->getMessage();
}

//VARIAVEIS GLOBAL
$name = 'Administrador';
$user = 'admin';
$passwd = 'admin';
$level = 'Administrador';
$active = '1';
