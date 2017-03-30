<?php

/**
 * Description of RelatorioSimples
 *
 * @author alex.matos
 */
class RelatorioSimples extends TemplateRelatorio {

    protected function cabecalho() {
        echo "BANCO DO ALEX<br><br>";
    }

    protected function corpo(array $contas) {
        foreach ($contas as $conta) {
            echo $conta->getTitular() . " - " . $conta->getSaldo() . "<br>";
        }
    }

    protected function rodape() {
        echo "<br>(67) 99999-9999";
    }

}
