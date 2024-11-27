<?php
require_once 'Inventario.php';

class Player {
    private string $nome;
    private int $nivel;
    private Inventario $inventario;
    public function __construct(string $nome) {
        $this->setNome($nome);
        $this->nivel = 1;
        $this->inventario = new Inventario(20); 
    }
    public function getNome(): string {
        return $this->nome;
    }
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }
    public function getNivel(): int {
        return $this->nivel;
    }
    public function subirNivel(): void {
        $this->nivel++;
        $this->inventario->aumentarCapacidade($this->nivel * 3);
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
