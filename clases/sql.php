<?php 
    class SQL {
        private $servidor;
        private $usuario;
        private $password;
        private $database;
        private $conexion;

        public function __construct($servidor, $usuario, $password, $database, $conexion)
        {
            $this -> servidor = $servidor;
            $this -> usuario = $usuario;
            $this -> password = $password;
            $this -> database = $database;
            $this -> conexion = $conexion;
        }
    }
?>