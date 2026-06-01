<?php

require_once "Pessoa.php";
require_once "PessoaDAO.php";

$dao = new PessoaDAO();

$pessoa = new Pessoa(
    "Ana Atualizada",
    "123.456.789-00",
    "ana_nova@example.com",
    30,
    1
);

$dao->update($pessoa);

echo "<h3>Registro atualizado com sucesso!</h3>";



$lista = $dao->readAll();

foreach ($lista as $p) {
    echo $p["nome"] . " - ";
    echo $p["cpf"] . " - ";
    echo $p["email"] . " - ";
    echo $p["idade"] . "<br> anos</br>";
}