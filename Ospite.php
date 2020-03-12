<?php
    require_once 'Persona.php';

    class Ospite extends Persona
    {
        private $document;
        private $bagagesNum;

        public function __construct($_name, $_surname, $_document)
        {
            parent::__construct($_name, $_surname);
            $this->document = $_document;
        }
    }