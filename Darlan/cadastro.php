<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Nomeado</h2>
        <p>Favor insira nome e cpf</p>
        <form action="cadrealizado.php" method="post">
        <div class="form-group">
                <label>Nome</label>
                <input type="Nome" name="Nome" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>RA</label>
                <input type="RA" name="RA" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Placa</label>
                <input type="Placa" name="Placa" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
</div>
</form>
</div>
</body>
</html>