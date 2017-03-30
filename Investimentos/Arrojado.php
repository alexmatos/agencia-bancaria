<?php

class Arrojado implements Investimento {

    public function calcula(Conta $conta) {
        $random = mt_rand(1, 100);
        if ($random >= 1 && $random <= 20) {
            return $conta->getSaldo() * 0.05;
        } else if ($random > 20 && $random <= 50) {
            return $conta->getSaldo() * 0.03;
        } else
            return $conta->getSaldo() * 0.006;
    }

}
