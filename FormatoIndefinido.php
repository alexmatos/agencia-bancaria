<?php

/**
 * Description of XML
 *
 * @author alex.matos
 */
class FormatoIndefinido implements Resposta {

    private $proxima;

    public function responde(Requisicao $req, Conta $conta) {
        echo "Formato Indefinido!";
    }

    public function __construct() {

    }

}
