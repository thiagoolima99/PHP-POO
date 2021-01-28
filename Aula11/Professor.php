<?php
    require_once 'Pessoa.php';
    class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        public function receberAumento($au) {
            $this->salario += $au;
            echo "<p>Meu novo salário após o aumento de R$ $au é R$ $this->salario.<p>";
        }

        /**
         * Set the value of especialidade
         *
         * @return  self
         */ 
        public function setEspecialidade($especialidade)
        {
                $this->especialidade = $especialidade;

                return $this;
        }

        /**
         * Set the value of salario
         *
         * @return  self
         */ 
        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }
    }

?>