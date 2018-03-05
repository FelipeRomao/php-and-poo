<?php

require_once 'MetodosLutador.php';

class Lutador implements MetodosLutador {

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

    public function apresentar() {
        echo "<p>--------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador ". $this->getNome();
        echo " veio diretamente de ". $this->getNacionalidade();
        echo " tem ". $this->getIdade(). " anos e pesa ". $this->getPeso() ." KG";
        echo "<br />";
        echo " Ele tem ". $this->getVitorias(). " vitórias, ";
        echo $this->getDerrotas(). " derrotas e ". $this->getEmpates(). " empates";
        echo "<br />";
        
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function status() {
        echo "<p>--------------------</p>";
        echo "<p>". $this->getNome(). " é um peso ". $this->getCategoria();
        echo " e já ganhou ". $this->getVitorias(). " vezes,";
        echo " perdeu ". $this->getDerrotas(). " vezes e ";
        echo " empatou ". $this->getEmpates(). " vezes!";
    }

}
