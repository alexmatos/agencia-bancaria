<?php

/**
 * Description of Positivo
 *
 * @author alex.matos
 */
class Positivo implements Estado {

    public function deposito(\Conta $conta, $valor) {
        $conta->setSaldo($conta->getSaldo() + $valor * 0.98);
    }

    public function saque(\Conta $conta, $valor) {
        $novoSaldo = $conta->getSaldo() - $valor;
        $conta->setSaldo($novoSaldo);
        if ($novoSaldo < 0) {
            $this->negativa($conta);
        } 
    }

    public function negativa(\Conta $conta) {
        $conta->setEstado(new Negativo());
    }

    public function positiva(\Conta $conta) {
        echo "Conta já está positiva!";
    }

    public function toString() {
        return "Positivo";
    }

}
