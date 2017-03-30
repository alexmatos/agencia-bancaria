<?php

/**
 * Description of Conta
 *
 * @author alex.matos
 */
class Conta {
    
    private $titular;
    private $agencia;
    private $conta;
    private $saldo;
    private $dataAbertura;
    
    function __construct($titular, $agencia, $conta, $saldo, $dataAbertura) {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
        $this->dataAbertura = $dataAbertura;
    }

    public function deposita($valor) {
        $this->saldo += $valor;
    }
            
    public function getTitular() {
        return $this->titular;
    }

    public function getConta() {
        return $this->conta;
    }
    
    public function getAgencia() {
        return $this->agencia;
    }

    public function getSaldo() {
        return $this->saldo;
    }
    
    function getDataAbertura() {
        return $this->dataAbertura;
    }

}
