<?php

/**
 * Description of Positivo
 *
 * @author alex.matos
 */
class Negativo implements Estado {

    public function deposito(\Conta $conta, $valor) {
        $novoSaldo = $conta->getSaldo() + $valor * 0.95;
        $conta->setSaldo($novoSaldo);
        if ($novoSaldo > 0) {
            $this->positiva($conta);
        }
    }

    public function saque(\Conta $conta, $valor) {
        echo "Não é possível realizar saque. Conta com saldo negativo.";
    }

    public function negativa(\Conta $conta) {
        echo "Conta já está negativa!";
    }

    public function positiva(\Conta $conta) {
        $conta->setEstado(new Positivo());
    }

    public function toString() {
        return "Negativo";
    }

}
