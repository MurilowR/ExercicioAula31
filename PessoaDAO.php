<?php

require_once("Conexao.php");
require_once("Pessoa.php");

class PessoaDAO {

    private $conn;

    public function __construct() {
        $this->conn = Conexao::getConexao();
    }

    // CREATE
    public function create(Pessoa $p) {

        $sql = "INSERT INTO pessoas (nome, cpf, email, idade)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            $p->getNome(),
            $p->getCpf(),
            $p->getEmail(),
            $p->getIdade()
        ]);
    }

    // READ
    public function read($id) {

        $sql = "SELECT * FROM pessoas WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // UPDATE
    public function update(Pessoa $p) {

        $sql = "UPDATE pessoas
                SET nome = ?, cpf = ?, email = ?, idade = ?
                WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            $p->getNome(),
            $p->getCpf(),
            $p->getEmail(),
            $p->getIdade(),
            $p->getId()
        ]);
    }

    // DELETE
    public function delete($id) {

        $sql = "DELETE FROM pessoas WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);
    }

    // READ ALL
    public function readAll() {

        $sql = "SELECT * FROM pessoas";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}