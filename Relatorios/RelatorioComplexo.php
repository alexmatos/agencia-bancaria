<?php

/**
 * Description of RelatorioSimples
 *
 * @author alex.matos
 */
class RelatorioComplexo extends TemplateRelatorio {

    protected function cabecalho() {
        echo "BANCO DO ALEX";
        echo "<br>Rua Sem número, nº desconhecido";
        echo "<br>(67) 99999-9999<br><br>";
    }

    protected function corpo(array $contas) {
        foreach ($contas as $conta) {
            echo $conta->getTitular() . " - " . $conta->getAgencia() .
            " " . $conta->getConta() . " - " . $conta->getSaldo() . "<br>";
        }
    }

    protected function rodape() {
        echo "<br>alex@banco.com<br>";
        echo date("dd/mm/yyyy");
    }

}
