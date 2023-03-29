<?php

    namespace app\traits;

    trait Read {

        public function create($data){

            //tentar fazer daqui pra baixo para deixar genericamenteo array.
            

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