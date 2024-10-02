<?php

require_once "funcaoBD.php";

class Processamento {
    private $email;
    private $senha;

    public function __construct($email, $senha) {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function processar() {
        $db = new Database();

        if ($db->verificarUsuario($this->email, $this->senha)) {
            if ($this->email === 'matheus@hotmail.com'){
                header('location: ../view/restrito.php');
            }else{
                header('Location: ../view/pagina.php');
            }
            
            exit;
        } else {
            echo "Email ou senha inválidos.";
        }
    }
}

if (!empty($_POST['inputEmail']) && !empty($_POST['inputSenha'])) {
    $processamento = new Processamento($_POST['inputEmail'], $_POST['inputSenha']);
    $processamento->processar();
}

?>

