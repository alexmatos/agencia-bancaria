<?php

/**
 * Description of Porcento
 *
 * @author alex.matos
 */
class Porcento implements Resposta {

    private $proxima;

    public function __construct(Resposta $proxima) {
        $this->proxima = $proxima;
    }

    public function responde(Requisicao $req, Conta $conta) {
        if ($req->getFormato() == Formato::$PORCENTO) {
            echo $conta->getTitular() . "%" . $conta->getConta() . "%";
        } else {
            $this->proxima->responde($req, $conta);
        }
    }

    public function setProxima(Resposta $resposta) {
        $this->proxima = $resposta;
    }

}
