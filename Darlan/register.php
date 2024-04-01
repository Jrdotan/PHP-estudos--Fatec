<?php

include 'header.php';

?>


<?php
session_start();


$fileName = 'fileregister.txt';

if (file_exists($fileName)) {
  $registeredUsers = array();
  $Opn3 = fopen($fileName, 'r');

  if ($Opn3) {
    while (($line = fgets($Opn3)) !== false)
     {
      $userData = explode('|', trim($line)); // Separa as informações lidas dentro de um vetor, separando cada informação por um delimitador
      $registeredUsers[] = array(
        'nome' => $userData[0],
        'ra' => $userData[1],
        'placa' => $userData[2],
      );
    }
    fclose($Opn3);
  } else {
    echo '<script type="javascript">alert("Erro ao abrir o arquivo")</script>';
  }


  if (!empty($registeredUsers)) {
    echo '<h3>Alunos Cadastrados</h3>';
    echo '<ul>';
    foreach ($registeredUsers as $URSS) {
      echo '<li>' . $URSS['nome'] . ' - RA: ' . $URSS['ra'] . ' - Placa: ' . $URSS['placa'] . '</li>';
    }
    echo '</ul>';
  } else {
    echo '<p>Nenhum aluno cadastrado ainda.</p>';
  }
} else {
  echo '<p>Arquivo de registros não encontrado.</p>';
}

?>
