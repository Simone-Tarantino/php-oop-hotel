<?php
    class Persona 
    {
        private $name;
        private $surname;
        private $email;
        private $address;
        private $CF;
        private $telephoneNumber;
        
        public function __construct($_name, $_surname)
        {
            $this->name = $_name;
            $this->surname = $_surname;
        }
        
            public function setEmail($_email)
            {
                $this->email = $_email;
            }

            public function getEmail()
            {
                return $this->email;
            }
        
    }