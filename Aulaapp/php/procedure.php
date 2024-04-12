<?php

include 'conexao.php';

if(isset($_POST['qtde'])){
$qtde = $_POST['qtde'];


$result = mysqli_query($connect, "call Lista_cliente('".$qtde."')"); //cria variavel de resultados para receber call de procedure.

echo "<h2>Resultados</h2>";
echo '<br>';

while($line = mysqli_fetch_assoc($result)){ //leitura de resultados da query
    echo $line["id"] . " - " . 
    $line["nome"] . " - " . $line["tipo"];

    echo '<br>';
}
}