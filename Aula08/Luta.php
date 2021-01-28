<?php
        require_once 'Lutador.php';
    Class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

    function marcarLuta($l1, $l2) {
            if ($l1->getCategoria() === $l2->getCategoria() and ($l1 != $l2)) {
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            } else {
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
    }

    function lutar() {
            if ($this->aprovada) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch($vencedor) {
                        case 0: // Empate
                                echo "<p>Empate!</p>";
                                $this->desafiado->empatarLuta();
                                $this->desafiante->empatarLuta();
                                break;
                        
                        case 1: // Desafiado vence
                                echo "<p>" . $this->desafiado->getNome() . " venceu. </p>";
                                $this->desafiado->ganharLuta();
                                $this->desafiante->perderLuta();
                                break;

                        case 2: // Desafiante vence
                                echo "<p>" . $this->desafiante->getNome() . " venceu. </p>";
                                $this->desafiante->ganharLuta();
                                $this->desafiado->perderLuta();
                                break;
                }
            } else {
                    echo "<p>Luta não pode acontecer.</p>";
            }
        
    }

    function __construct() {

    }

        /**
         * Get the value of desafiado
         */ 
        function getDesafiado()
        {
                return $this->desafiado;
        }

        /**
         * Set the value of desafiado
         *
         * @return  self
         */ 
        function setDesafiado($desafiado)
        {
                $this->desafiado = $desafiado;

                return $this;
        }

        /**
         * Set the value of desafiante
         *
         * @return  self
         */ 
        function setDesafiante($desafiante)
        {
                $this->desafiante = $desafiante;

                return $this;
        }

        /**
         * Set the value of rounds
         *
         * @return  self
         */ 
        function setRounds($rounds)
        {
                $this->rounds = $rounds;

                return $this;
        }

        /**
         * Set the value of aprovada
         *
         * @return  self
         */ 
        function setAprovada($aprovada)
        {
                $this->aprovada = $aprovada;

                return $this;
        }
    }

?>