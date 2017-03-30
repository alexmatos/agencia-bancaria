<?php

/**
 * Description of CSV
 *
 * @author alex.matos
 */
class CSV implements Resposta {

    private $proxima;
  
    public function responde(Requisicao $req, Conta $conta) {
        if ($req->getFormato() == Formato::$CSV) {
            echo $conta->getTitular() . ";" . $conta->getConta() . ";";
        } else {
            $this->proxima->responde($req, $conta);
        }
    }

    public function __construct(Resposta $proxima) {
        $this->proxima = $proxima;
    }

}
