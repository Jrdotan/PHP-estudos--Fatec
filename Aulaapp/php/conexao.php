<?php
 $connect = mysqli_connect('localhost', 'root', ''); //local do banco, usuario e senha
 mysqli_set_charset($connect, 'utf8'); //caracter utf8 com padrão pt-br

 if(!$connect){ //teste de conexão com server
    die("erro de conexão:" . mysqli_error($connect));

 }

 $banco = mysqli_select_db($connect, 'empresa');

 if(!$banco){ //teste de conexão com o banco
    die("Erro de conexão: " . mysqli_error($connect));
 }

 



