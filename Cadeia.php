<?php

/**
 * Description of Cadeia
 *
 * @author alex.matos
 */
class Cadeia {

    public function iniciar(Requisicao $req, Conta $conta) {
        $xml = new XML(new CSV(new Porcento(new FormatoIndefinido())));
        return $xml->responde($req, $conta);
    }

}
