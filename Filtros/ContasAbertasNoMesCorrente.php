<?php

/**
 * Description of Filtro
 *
 * @author alex.matos
 */
class ContasAbertasNoMesCorrente extends Filtro {

    public function filtra($contas) {
        $retorno = array();
        foreach ($contas as $conta) {
            $dataAbertura = explode("/", $conta->getDataAbertura());
            $mesAnoAbertura = $dataAbertura[1].$dataAbertura[2];
            if ($mesAnoAbertura == date('mY')) {
                $retorno[] = $conta;
            }
        }
        return array_merge($retorno, $this->filtraOutroTipo($contas));
    }
}
