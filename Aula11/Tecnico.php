<?php
    require_once 'Aluno.php';
    Class Tecnico extends Aluno {
        private $registroProfissional;

        public function praticar() {
            echo "<p>Estou trabalhando com o registro profissional número $this->registroProfissional.</p>";
        }

        /**
         * Get the value of registroProfissional
         */ 
        public function getRegistroProfissional()
        {
                return $this->registroProfissional;
        }

        /**
         * Set the value of registroProfissional
         *
         * @return  self
         */ 
        public function setRegistroProfissional($registroProfissional)
        {
                $this->registroProfissional = $registroProfissional;

                return $this;
        }
    }

?>