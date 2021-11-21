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

        public function authLogin($email, $password) 
        {
            $consulta = "SELECT * FROM usuario WHERE (email = '$email')";
            $resultado = $this -> getConexion() -> query($consulta);
            $row = $resultado -> fetch_assoc();
        
            if (password_verify($password, $row['password'])) {
                session_start();
                $url = '../vistas/home.php';
                $_SESSION['id'] = $row['id'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['avatar'] = $row['avatar'];
                $_SESSION['rol'] = $row['rol'];
            } else {
                $url = '../vistas/index.php?error=incorrecto';          
            }
            return $url;
        }

        public function insertRegister($nombre, $email, $password)
        {
            $sql = "SELECT email FROM usuario WHERE email = '$email'";
            $result = $this -> getConexion()->query($sql);
            if ($result->num_rows == 0) {
                    $sql = "INSERT INTO `usuario`(`nombre`, `email`, `password`, `avatar`) VALUES ('$nombre','$email','$password','none')";
                if ($this -> getConexion()->query($sql)) {
                    $url = '../vistas/index.php?registrado=correcto';
                }
            } else {
                $url = '../vistas/index.php?error=existe';
            }
            return $url;
        }
    }
?>