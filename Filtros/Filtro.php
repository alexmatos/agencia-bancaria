<?php

/**
 * Description of Filtro
 *
 * @author alex.matos
 */
abstract class Filtro {

    private $tipo;

    function __construct(Filtro $outroTipo = null) {
        $this->tipo = $outroTipo;
    }

    protected function filtraOutroTipo($contas) {
        if (!is_null($this->tipo)) {
            return $this->tipo->filtra($contas);
        }
      return [];
    }

    public abstract function filtra($contas);
}
