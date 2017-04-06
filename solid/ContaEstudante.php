<?php

class ContaEstudante {

    private $m;
    private $milhas;

    public function __construct() {
        $this->m = new ManipuladorDeSaldo();
    }

    public function deposita($valor) {
        $this->m->deposita($valor);
        $this->milhas += (int) $valor;
    }

    public function getMilhas() {
        return $this->milhas;
    }

}
