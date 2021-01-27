<?php
    Class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
    }

    public function marcarLuta() {

    }

    public function lutar() {
        
    }

    public function __construct() {
        

        /**
         * Get the value of desafiado
         */ 
        public function getDesafiado()
        {
                return $this->desafiado;
        }

        /**
         * Set the value of desafiado
         *
         * @return  self
         */ 
        public function setDesafiado($desafiado)
        {
                $this->desafiado = $desafiado;

                return $this;
        }

        /**
         * Set the value of desafiante
         *
         * @return  self
         */ 
        public function setDesafiante($desafiante)
        {
                $this->desafiante = $desafiante;

                return $this;
        }

        /**
         * Set the value of rounds
         *
         * @return  self
         */ 
        public function setRounds($rounds)
        {
                $this->rounds = $rounds;

                return $this;
        }

        /**
         * Set the value of aprovada
         *
         * @return  self
         */ 
        public function setAprovada($aprovada)
        {
                $this->aprovada = $aprovada;

                return $this;
        }
    }

?>