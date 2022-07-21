<?php
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();
session_cache_expire(120); // define o prazo do cache em 120 minutos
$cache_expire = session_cache_expire();

@session_start(); //start the session
require_once 'config.php';

$user = $_POST['user'];
$passwd = $_POST['passwd'];

$query = $pdo->prepare("SELECT * FROM `users` WHERE `user` = :user AND `password` = :passwd");
$query->bindValue(":user", "$user");
$query->bindValue(":passwd", "$passwd");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

if ($total_reg > 0) {
  $_SESSION['id_user'] = $res[0]['id'];
  $_SESSION['nome_user'] = $res[0]['name'];
  $_SESSION['level_user'] = $res[0]['level'];
  $_SESSION['user_active'] = $res[0]['active'];
  echo "<script>window.location='admin'</script>";
} else {
  echo "<script>window.alert('Usuário ou senha está incorreto');</script>";
  echo "<script>window.location='login.php'</script>";
}