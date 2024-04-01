<?php

include 'header.php';

?>
<?php
session_start();
 
 $nome = $_POST['Nome'];

 $ra =  $_POST['RA'];

 $placa = $_POST['Placa'];

 if(!empty($nome)  && !empty($ra) && !empty($placa)){
    if(!file_exists('fileregister.txt')){
        $Opn = fopen('fileregister.txt', 'w');
        fwrite($Opn, $nome . '|' . $ra . '|' . $placa . PHP_EOL);
        echo '<script type="javascript">alert("File criada com sucesso")';
        fclose($Opn);
        header("location: index.php");
        exit;
      
    }
   $Opn = fopen('fileregister.txt', 'a');
   fwrite($Opn, $nome . '|' . $ra . '|' . $placa . PHP_EOL);
   echo '<script type="javascript">alert("Informações gravadas com sucesso")';
   fclose($Opn);
   header("location: index.php");
   
   
}
 
?>