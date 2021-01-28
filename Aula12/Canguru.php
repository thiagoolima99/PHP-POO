<?php
    require_once 'Mamifero.php';
    Class Canguru extends Mamifero {
        public function usarBolsa() {
            echo "Usando Bolsa";
        }

        public function locomover() {
            echo "Saltando";
        }
    }

?>