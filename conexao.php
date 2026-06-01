<?php

class Conexao {

    private static $instancia = null;

    public static function getConexao() {

        if (self::$instancia === null) {

            try {

                self::$instancia = new PDO(
                    "mysql:host=localhost;dbname=agendaVirtual;charset=utf8",
                    "root",
                    ""
                );

                self::$instancia->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );

            } catch (PDOException $e) {

                die("Erro na conexão: " . $e->getMessage());

            }
        }

        return self::$instancia;
    }
}