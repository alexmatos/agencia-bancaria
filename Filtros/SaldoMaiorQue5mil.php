<?php

/**
 * Description of Filtro
 *
 * @author alex.matos
 */
class SaldoMaiorQue5mil extends Filtro {

    public function filtra($contas) {
        $retorno = array();
        foreach ($contas as $conta) {
            if ($conta->getSaldo() > 5000) {
                $retorno[] = $conta;
            }
        }
        return array_merge($retorno, $this->filtraOutroTipo($contas));
    }

}
