<?php

    namespace app\traits;

    trait Read {

        public function all($returnALL = true){

            try {
                
                $query = $this->connection->query(
                    "SELECT * FROM {$this->table}"
                );

                return $returnALL ? $query->fetchALL() : $query->fetch();

            } catch (PDOException $e) {
                var_dump($e->getMessage());
            }

        }

    }