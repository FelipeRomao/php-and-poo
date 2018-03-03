<?php

class ContaBanco {

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    /*function __construct($numConta, $tipo, $dono) {
        $this->numConta = $numConta;
        $this->tipo = $tipo;
        $this->dono = $dono;
        $this->saldo = 0;
        $this->status = false;
    }*/

    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($tipo == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<h1>Conta ainda tem dinheiro, não posso fechá-la!</h1>";
        } elseif ($this->getSaldo() < 0) {
            echo "<h2>Conta está em débito. Impossível encerrar!</h2>";
        } else {
            $this->setStatus(false);
        }
    }

    public function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Deposito de R$ $valor na conta de ". $this->getDono() ."</p>";
        } else {
            echo "<p>Conta fechada! Não consigo depositar!</p>";
        }
    }

    public function sacar($valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R$ $valor autorizado na conta de ". $this->getDono() ."</p>";
            } else {
                echo "<p>Saldo insuficiente para saque!</p>";
            }
        } else {
            echo "<h3>Não posso sacar de uma conta fechada! =(</h3>";
        }
    }

    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $valor = 12;
        } elseif ($this->getTipo() == "CP") {
            $valor = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>Mensalidade de R$ $valor debitada na conta de ". $this->getDono() . "</p>";
        } else {
            echo "<p>Problemas com a conta. Não posso cobrar!</p>";
        }
    }

    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}
