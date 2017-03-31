<?php

/**
 *
 * @author alex.matos
 */
interface Estado {

    public function saque(Conta $conta, $valor);

    public function deposito(Conta $conta, $valor);

    public function negativa(Conta $conta);

    public function positiva(Conta $conta);
    
    public function toString();

}
