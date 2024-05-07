<?php 
session_start();

class Login { 
	private $name = 'vestibular'; 
	private $password = 'fatec'; 
	 
	public function verificar_credenciais( $name, $password ) { 
        if ( $name == $this->name ) {
            if ( $password == $this->password ) {
                $_SESSION["logged_in"] = TRUE;
                return TRUE;
            }
        }
        return FALSE;
	} 

    public function verificar_logado() { 
        if ( $_SESSION["logged_in"]) {
            return TRUE;
        }
        $this->logout();
	} 

    public function logout() { 
        session_destroy();
        header("Location: index.php");
        exit();
	} 
} 

class Cadastro{
    private $usernameDbh;
    private $passwordDbh;
    private $database;

 
protected function connect() {
    try {
        // Variaveis ambientes
        $usernameDbh = "root";
         $passwordDbh = "";
        $database = new PDO('mysql:host=localhost;dbname=vestibular', $usernameDbh, $passwordDbh);

    } catch (PDOException $e) {
        // Log de erro no sistema
        error_log("Erro de conexão: " . $e->getMessage(), 0);
        // Avisa sobre o erro
        echo "Um erro ocorreu ao tentar acessar o banco";
        exit();
    }

    return $database;
}

protected function set_usuario($nomeCompleto, $Curso) // Método que insere dados de um cadastro no banco
{
    $comandosql1 = $this->connect()->prepare('INSERT INTO candidatos (nome, curso) VALUES (:nome, :curso);');


    $comandosql1->execute(['nome'=>$nomeCompleto, 'curso' =>$Curso]);

    $checar_resultado;

    if($comandosql1->rowCount() > 0){
       $checar_resultado = false;

    }
    else{
       $checar_resultado = true;
    }

    return $checar_resultado;
   }
}

class Candidato extends Cadastro {

    private $nomeCompleto;
    private $Curso;
    


    protected function __Candidato( $nomeCompleto, $Curso){
        $this->nomeCompleto = $nomeCompleto;
        $this->Curso = $Curso;
     
    }


    public function validar_cadastro_candidato() {
      
       

        $this->set_usuario($this->nomeCompleto, $this->Curso);
        
    }

}












?>


