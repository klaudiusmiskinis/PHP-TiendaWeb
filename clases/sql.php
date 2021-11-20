<?php 
    class SQL {
        //ATRIBUTOS
        private $servidor;
        private $usuario;
        private $password;
        private $database;
        private $conexion;

        //CONSTRUCTOR
        public function __construct($servidor, $usuario, $password, $database)
        {
            $this -> servidor = $servidor;
            $this -> usuario = $usuario;
            $this -> password = $password;
            $this -> database = $database;
        }

        //MÉTODOS
        /* GETTERs */
        public function getServidor()
        {
            return $this -> servidor;
        }

        public function getUsuario()
        {
            return $this -> usuario;
        }

        public function getPassword() 
        {
            return $this -> password;
        }

        public function getDatabase()
        {
            return $this -> database;
        }

        public function getConexion()
        {
            return $this -> conexion;
        }

        /* SETTERs */
        public function setServidor($servidor)
        {
            $this -> servidor = $servidor;
        }

        public function setUsuario($usuario)
        {
            $this -> usuario = $usuario;
        }

        public function setPassword($password)
        {
            $this -> password = $password;
        }

        public function setDatabase($database)
        {
            $this -> database = $database;
        }

        public function setConexion($conexion)
        {
            $this -> conexion = $conexion;
        }

        /* MÉTODOS */
        public function inicializarConexion()
        {
            $this -> setConexion(mysqli_connect($this -> servidor, $this -> usuario, $this -> password, $this -> database));
        }
    }
?>