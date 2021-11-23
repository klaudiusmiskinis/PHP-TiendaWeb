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
                    $sql = "INSERT INTO `usuario`(`nombre`, `email`, `password`) VALUES ('$nombre','$email','$password')";
                if ($this -> getConexion()->query($sql)) {
                    $url = '../vistas/index.php?registrado=correcto';
                }
            } else {
                $url = '../vistas/index.php?error=existe';
            }
            return $url;
        }

        public function insertUsuario($nombre, $email, $password, $rol, $avatar)
        {
            $sql = "SELECT email FROM usuario WHERE email = '$email'";
            $result = $this -> getConexion()->query($sql);
            if ($result->num_rows == 0) {
                    $sql = "INSERT INTO `usuario`(`nombre`, `email`, `password`, `rol`, `avatar`) VALUES ('$nombre','$email','$password', '$rol', '$avatar')";
                if ($this -> getConexion()->query($sql)) {
                    $url = '../vistas/usuario-admin.php?registrado=correcto';
                }
            } else {
                $url = '../vistas/usuario-admin.php?error=existe';
            }
            return $url;
        }

        public function updateUsuario($id, $nombre, $email, $password, $rol) 
        {
            try {
                $sql = "UPDATE `usuario` SET `nombre`='$nombre',`email`='$email',`password`='$password', `rol`='$rol' WHERE id = $id";
                $this -> getConexion()->query($sql);
            } catch (Error) {}
            return '../vistas/usuario-admin.php';
        }

        public function prevenirInyeccion($variable)
        {
            $variable = stripcslashes($variable);  
            return mysqli_real_escape_string($this-> getConexion(), $variable);
        }

        public function adminUsuariosSelectAll() 
        {
            $query = "SELECT id, nombre, email, avatar, rol FROM usuario ORDER BY id";
            return $resultado = mysqli_query($this -> getConexion(), $query);
        }

        public function selectUserById($id) 
        {
            $query = "SELECT * FROM usuario WHERE id = $id";
            $resultado = mysqli_query($this -> getConexion(), $query);
            return $resultado -> fetch_assoc();
        }
    }
?>