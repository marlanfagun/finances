<?php
@session_start();
if (@$_SESSION['level_user'] !== 'Administrador' && @$_SESSION['level_user'] !== 'Padrão') {
  echo "<script>window.location='../index.php'</script>";
}