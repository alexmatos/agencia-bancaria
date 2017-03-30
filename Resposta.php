<?php

/**
 * Description of Resposta
 *
 * @author alex.matos
 */
interface Resposta {

    public function responde(Requisicao $req, Conta $conta);
}
