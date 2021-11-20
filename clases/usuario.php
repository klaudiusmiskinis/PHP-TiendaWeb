<?php 
    class Usuario {
        //ATRIBUTOS
        private $id;
        private $nombre;
        private $email;
        private $password;
        private $avatar;
        private $rol;

        //CONSTRUCTOR
        public function __construct($id, $nombre, $email, $password, $avatar, $rol) {
            $this -> $id = $id;
            $this -> $nombre = $nombre;
            $this -> $email = $nombre;
            $this -> $password = $password;
            $this -> $avatar = $avatar;
            $this -> $rol = $rol;
        }

        //MÉTODOS
        /* GETTERs */
        public function getId() 
        {
            return $this -> $id;
        }

        public function getNombre() 
        {
            return $this -> $nombre;
        }
       
        public function getEmail() 
        {
            return  $this -> $email;
        }

        public function getPassword() 
        {
            return $this -> $password;
        }

        public function getAvatar() 
        {
            return $this -> $avatar;
        }

        public function getRol() 
        {
            return  $this -> $rol;
        }

        /* SETTERs */
        
    }
?>
