<?php

/**
 * Description of Requisicao
 *
 * @author alex.matos
 */
class Requisicao {

    private $formato;

    function __construct($formato) {
        $this->formato = $formato;
    }

    function getFormato() {
        return $this->formato;
    }

}
