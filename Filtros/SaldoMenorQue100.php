<?php

/**
 * Description of Filtro
 *
 * @author alex.matos
 */
class SaldoMenorQue100 extends Filtro {

    public function filtra($contas) {
        $retorno = array();
        foreach ($contas as $conta) {
            if ($conta->getSaldo() < 100) {
                $retorno[] = $conta;
            }
        }
        return array_merge($retorno, $this->filtraOutroTipo($contas));
    }

}
