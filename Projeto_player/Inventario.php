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
            $this->itens = array_values($this->itens); 
            return true;
        }
        return false;
    }
    public function aumentarCapacidade(int $quantidade): void {
        $this->capacidade += $quantidade;
    }
    public function exibirItens(): void {
        if (empty($this->itens)) {
            echo "Inventário vazio.";
        } else {
            echo "Itens no inventário:";
            foreach ($this->itens as $item) {
                echo "- " . $item->getNome() . " (Peso: " . $item->getPeso() . ")";
            }
        }
    }
    public function getItens(): array {
        return $this->itens;
    }
}
?>
