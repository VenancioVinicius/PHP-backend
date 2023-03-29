<?php

    namespace app\controllers;

    use app\database\models\Student;

    class StudentController {

        private $student;

        public function __construct() {

            $this->student = new Student();

        }

        public function create($data){}

        public function read() {
            return json_encode($this->student->all());
        }

        public function update($data){}

        public function delete($id){}

        public function monitor(){}

    }