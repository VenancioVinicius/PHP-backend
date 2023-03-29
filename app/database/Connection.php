<?php
    namespace app\database;

    use PDO;

    class Connection {

        private static $pdo = null;

        public static function connection() {

            if(static::$pdo) {
                return static::$pdo;
            }

            try {
                $str = "mysql:host=localhost;dbname=colocarOmeu";

                static::$pdo = new PDO($str, 'root', 'senha',[
                    // Erros gerados pelo PDO serão do tipo Exception
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    // Retorno dos dados vindos do BD serão no formato de objeto
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    // Trabalhar com a codificação de caracteres UTF8
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ]);

                return static::$pdo;
            }catch (PDOException $e) {
                var_dump($e->getMessa);
            }

        }

    }