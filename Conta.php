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
    private $estado;

    function __construct($titular, $agencia, $conta, $saldo, $dataAbertura) {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
        $this->dataAbertura = $dataAbertura;
        if ($saldo < 0) {
            $this->estado = new Negativo();
        } else {
            $this->estado = new Positivo();
        }
    }

    public function saque($valor) {
        $this->estado->saque($this, $valor);
    }

    public function deposita($valor) {
        $this->estado->deposito($this, $valor);
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

    public function setSaldo($valor) {
        $this->saldo = $valor;
    }

    function getDataAbertura() {
        return $this->dataAbertura;
    }

    function getEstado() {
        return $this->estado->toString();
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

}
