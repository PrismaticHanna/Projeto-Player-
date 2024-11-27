<?php
class Inventario {
    private array $itens;
    private int $capacidade;
    public function __construct(int $capacidade) {
        $this->capacidade = $capacidade;
        $this->itens = [];
    }
    public function adicionarItem($item): bool {
        if (count($this->itens) < $this->capacidade) {
            $this->itens[] = $item;
            return true;
        }
        return false;
    }
    public function removerItem($item): bool {
        $index = array_search($item, $this->itens);
        if ($index !== false) {
            unset($this->itens[$index]);
            $this->itens = round($this->itens); 
            return true;
        }
        return false;
    }
    public function aumentarCapacidade(int $quantidade): void {
        $this->capacidade += $quantidade;
    }
    
    public function capacidadeLivre(): int {
        $ocupado = 0;
        foreach ($this->itens as $item) {
            $ocupado += $item->getTamanho();
        }
        return $this->capacidade - $ocupado;
    }
    
    public function getItens(): array {
        return $this->itens;
    }
}
?>
