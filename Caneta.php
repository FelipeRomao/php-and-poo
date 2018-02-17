<?php

class Caneta {
    
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar() {
        if ($this -> tampada == true) {
            echo "<h1>Erro ao rabiscar</h1>";
        } else {
             echo "<h2>Estou rabiscando...</h2>";
        }
    }
    function tampar() {
        $this -> tampada = true;
    }
    function destampar() {
        $this -> tampada = false;
    }
    
}
