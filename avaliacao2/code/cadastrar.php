<?php




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nomeCompleto = $_POST["Nome"];
    $Curso = $_POST["Curso"];
   
    
    include "classes.php";

$cadastro = new Candidato($nomeCompleto, (int)$Curso);

//lidar com problemas e erros no cadastro
    $cadastro->validar_cadastro_candidato();

    header("location: home.php");
}

