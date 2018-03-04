<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{

    private $volume;
    private $ligado;
    private $tocando;

    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        echo "<p>----- MENU -----</p>";
        echo "<p>Está ligado? ". ($this->getLigado()?"SIM":"NÃO"). "</p>";
        echo "<p>Está tocando? ". ($this->getTocando()?"SIM":"NÃO"). "</p>";
        
        echo "<p>Volume: ". $this->getVolume(). "</p>";
        for($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo "<br />";
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function fecharMenu() {
        echo "<p>Fechando Menu...</p>";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "ERRO! Não posso aumentar o volume.";
        }
    }

    public function menosVolume() {
        if ($this->getVolume()) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "ERRO! Não posso diminuir o volume.";
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

}
