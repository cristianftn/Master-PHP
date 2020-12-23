<?php

    class Usuario{
        public $nombre;
        public $apellido;
        public $email;
        public $password;


        // Getters
        function getNombre(){
            return $this -> nombre;
        }
        function getApellido(){
            return $this -> apellido;
        }
        function getEmail(){
            return $this -> email;
        }
        function getPassword(){
            return $this -> password;
        }


        //Setters
        function setNombre($nombre){
            $this -> nombre = $nombre;
        }
        function setApellido($apellido){
            $this -> apellido = $apellido;
        }
        function setEmail($email){
            $this -> email = $email;
        }
        function setPassword($password){
            $this -> password = $password;
        }


        //Sacar todos los usuarios se puede hacer esto:
        public function conseguirTodos(){
            return "Sacando todos los putos usuarios";
        }
    }
?>