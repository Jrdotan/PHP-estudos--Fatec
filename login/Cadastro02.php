<?php
 
 $nome = $_POST['Nome'];

 $cpf =  $_POST['Cpf'];

 if(!empty($nome)  && !empty($cpf)){
    if(!file_exists('fileregister.txt')){
        $Opn = fopen('fileregister.txt', 'w');
        fwrite($Opn, 'Nome: ' . $nome . PHP_EOL . 'Cpf: ' . $cpf . PHP_EOL);
        echo '<script type="javascript">alert("File criada com sucesso")';
        fclose($Opn);
        header("location: index.php");
      exit;
    }
   $Opn = fopen('fileregister.txt', 'a');
   fwrite($Opn, 'Nome: ' . $nome . PHP_EOL . 'Cpf: ' . $cpf . PHP_EOL);
   echo '<script type="javascript">alert("Informações gravadas com sucesso")';
   fclose($Opn);
   header("location: index.php");
   
   
}
 
?>