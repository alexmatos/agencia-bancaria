<?php

/**
 * Description of XML
 *
 * @author alex.matos
 */
class XML implements Resposta {

    private $proxima;

    public function responde(Requisicao $req, Conta $conta) {
        if ($req->getFormato() == Formato::$XML) {
            echo "&lt;conta&gt;&lt;titular&gt;" . $conta->getTitular() . "&lt;/titular>&lt;saldo&gt;"
            . $conta->getConta() . "&lt;/saldo&gt;&lt;/conta&gt;";
        } else {
            $this->proxima->responde($req, $conta);
        }
    }

    public function __construct(Resposta $proxima) {
        $this->proxima = $proxima;
    }

}
