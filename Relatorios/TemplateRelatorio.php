<?php

/**
 * Description of TemplateRelatorio
 *
 * @author alex.matos
 */
abstract class TemplateRelatorio {
    
    public function imprimir(array $contas) {
        $this->cabecalho();
        $this->corpo($contas);
        $this->rodape();
    }
    
    protected abstract function cabecalho();
    
    protected abstract function corpo(array $contas);
    
    protected abstract function rodape();
}
