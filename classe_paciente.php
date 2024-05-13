<?php

class paciente{
    private $pRg;
    private $pNome;
    private $pIdade;
    private $pRegiao;
    private $pDoenca;


public function __construct($pRg, $pNome, $pIdade, $pRegiao, $pDoenca){
    $this->pRg = $pRg;
    $this->pNome = $pNome; 
    $this->pIdade = $pIdade; 
    $this->pRegiao = $pRegiao; 
    $this->pDoenca = $pDoenca; 
}

public function validador_rg(){
    $resultado;
    $contador[0] = 7;
    if($this->pRg < $contador[0]){
      $resultado = false;  
    }
    else{

     $resultado = true;
    }
    return $resultado;
}

protected function valida_doenca(){

}
}
?>