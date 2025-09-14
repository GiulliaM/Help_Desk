<?php

//iniciar a sessão 
session_start();
echo $_SESSION ['autenticado'];

//vereficar se o indice autenticado existe ou é igual a não 
if (!isset ($_SESSION['autenticado']) || $_SESSION ['autenticado'] == 'NÃO') {
header ('Location: index.php?login=erro2');
//monstrar erro 404
// header ('Location: /404.php');
}
?>