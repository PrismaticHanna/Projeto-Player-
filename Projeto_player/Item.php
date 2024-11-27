<?php

abstract class Item {
    protected $nome;
    protected $tamanho;
    public function __construct($nome, $tamanho) {
        $this->nome=$nome;
        $this->tamanho=$tamanho;
    }
    public function getTamanho() {
        return $this->tamanho;
    }
    public function getNome(): string {
        return $this->nome;
    }
}
?>


