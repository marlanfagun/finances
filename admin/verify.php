<?php
@session_start();
if (@$_SESSION['level_user'] !== 'Administrador' && @$_SESSION['level_user'] !== 'Padrão' || @$_SESSION['user_active'] == '0') {
  echo "<script>window.alert('Seu usuário está desativado, entre em contato com um administrador para mais informações.');</script>";
  echo "<script>window.location='../index.php'</script>";
}