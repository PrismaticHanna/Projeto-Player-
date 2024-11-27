<?php
require_once 'Inventario.php';

class Player {
    private string $nome;
    private int $lvl;
    private Inventario $inventario;
    public function __construct(string $nome) {
        $this->setNome($nome);
        $this->lvl = 1;
        $this->inventario = new Inventario(20); 
    }
    public function getNome(): string {
        return $this->nome;
    }
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }
    public function getLvl(): int {
        return $this->lvl;
    }
    public function subirLvl(): void {
        $this->lvl++;
        $this->inventario->aumentarCapacidade($this->lvl * 3);
    }
    public function coletarItem($item): bool {
        return $this->inventario->adicionarItem($item);
    }
    public function soltarItem($item): bool {
        return $this->inventario->removerItem($item);
    }
    public function getInventario(): Inventario {
        return $this->inventario;
    }
}
?>
