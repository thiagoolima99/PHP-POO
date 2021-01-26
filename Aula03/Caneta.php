<?php
    Class Caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar() {
            if  ($this->tampada == true) {
                echo "<p>Não posso rabiscar!</p>";
            } else {
                echo "<p>Estou rabiscando...</p>";
            }          
        }

        private function tampar() {
            $this->tampada = true;
        }

        private function destampar() {
            $this->tampada = false;
        }



    }

?>