<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "Projeto2024";
    private $conexao;

    public function __construct() {
        $this->conectarBD();
    }

    private function conectarBD() {
        $this->conexao = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conexao->connect_error) {
            die("Erro na conexão: " . $this->conexao->connect_error);
        }
    }

    public function verificarUsuario($email, $senha) {
        $stmt = $this->conexao->prepare("SELECT * FROM cliente WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $resultado = $stmt->get_result();

        $usuarioExiste = $resultado->num_rows > 0;

        $stmt->close();
        $this->conexao->close();

        return $usuarioExiste;
    }
}

?>
