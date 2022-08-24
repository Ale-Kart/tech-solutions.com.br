<?php 

    class Conexao {

        private static $conexao;

        public function conectar() {
            try {
                if (!isset(self:: $conexao)) {
                    self:: $conexao = new PDO('mysql: host= localhost; dbname = tech_solutions', 'root', 'sebrae123');
                }
            } catch (PDOException $e) {
                echo "Occorreu um erro: Conexão não foi estabelecida com Banco de Dados" . $e->getMessage();
            }
            return self::$conexao;
        }

    }


?>