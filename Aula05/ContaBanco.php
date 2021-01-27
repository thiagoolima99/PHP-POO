<?php
    Class ContaBanco {
        // Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Métodos

        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->saldo = 150;
            }
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
            } elseif ($this->getSaldo() < 0) {
                echo "<p>Conta com débito, não posso fechá-la!</p>";
            } else {
                $this->setStatus(false);
            }
        }

        public function depositar($v) {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de R$ $v na conta de " . $this->getDono() . "</p>";
            } else {
                echo "<p>Conta fechada. Não consigo depositar.</p>";
            }
        }

        public function sacar($v) {
            if ($this->getStatus()) {
                if ($this->getSaldo() >= $v) {
                    // $this->saldo -= $v;
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$ $v autorizado na conta de " . $this->getDono() . "</p>";
                } else {
                    echo "<p>Saldo insuficiente para saque!</p>";
                } 
            }   else {
                    echo "<p>Não posso sacar de uma conta fechada!</p>";
                }
        }

        function pagarMensal() {
            if ($this->getTipo() == "CC") {
                $v = 12;
            } elseif ($this->getTipo() == "CP") {
                $v = 20;
            }

            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$ $v debitada na conta de " . $this->getDono() . "</p>"; 
            } else {
                echo "<p>Problemas com a conta! Não posso cobrar.</p>";
            }
        }

        
        // Método Especiais
        function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }

        function getNumConta()
        {
                return $this->numConta;
        }

        function setNumConta($numConta)
        {
                $this->numConta = $numConta;

                return $this;
        }

        function getTipo()
        {
                return $this->tipo;
        }

        function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }

        function getDono()
        {
                return $this->dono;
        }

        function setDono($dono)
        {
                $this->dono = $dono;

                return $this;
        }

        function getSaldo()
        {
                return $this->saldo;
        }

        function setSaldo($saldo)
        {
                $this->saldo = $saldo;

                return $this;
        }

        function getStatus()
        {
                return $this->status;
        }

        function setStatus($status)
        {
                $this->status = $status;

                return $this;
        }
    
    }
?>

