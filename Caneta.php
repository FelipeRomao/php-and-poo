<?php

class Caneta {
    
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    function Caneta($modelo, $cor, $ponta, $carga){
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setPonta($ponta);
        $this->setCarga($carga);
        $this->tampar();
    }
    
    public function escrever() {
        if ($this -> tampada == true) {
            echo "<h1>Erro ao escrever</h1>";
        } else {
             echo "<h2>Estou escrevendo...</h2>";
        }
    }
    
    public function pintar(){
        if ($this -> tampada == true) {
            echo "<h1>Erro ao pintar</h1>";
        } else {
             echo "<h2>Estou pintando...</h2>";
        }
    }
    
    public function rabiscar() {
        if ($this -> tampada == true) {
            echo "<h1>Erro ao rabiscar</h1>";
        } else {
             echo "<h2>Estou rabiscando...</h2>";
        }
    }
    private function tampar() {
        $this -> tampada = true;
    }
    private function destampar() {
        $this -> tampada = false;
    }
    
    function getModelo() {
        return $this->modelo;
    }

    function getCor() {
        return $this->cor;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getCarga() {
        return $this->carga;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setCarga($carga) {
        $this->carga = $carga;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }    
}
