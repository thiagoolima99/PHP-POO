<?php
    require_once 'Mamifero.php';
    Class Cachorro extends Mamifero {
        public function emitirSom() {
            echo "<p>Au!Au!Au!</p>";
        }

        public function enterrarOsso() {
            echo "Enterrando osso";
        }

        public function abanarRabo() {
            echo "Abanando o rabo";
        }
    }

?>