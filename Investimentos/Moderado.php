<?php

class Moderado implements Investimento {
   
    public function calcula(Conta $conta) {
        $random = mt_rand(1, 100);
        if($random >= 50) {
            return $conta->getSaldo() * 0.025;
        }
        return $conta->getSaldo() * 0.007;
    }

}