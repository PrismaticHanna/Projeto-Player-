<?php
require_once('./Projeto_Player/Player.php');
require_once('./Projeto_Player/Ataque.php');
require_once('./Projeto_Player/Defesa.php');
require_once('./Projeto_Player/Magia.php');

$player1 = new Player('Lucas');
$player2 = new Player('Hanna');

$itensAtaque = [new Ataque('Espada'), new Ataque('Adaga')];
$itensDefesa = [new Defesa('Escudo'), new Defesa('Armadura')];
$itensMagia = [new Magia('Feitiço de Fogo'), new Magia('Poção de Cura')];

function exibirInventario($player) {
    $inventario = $player->getInventario();
    $itens = $inventario->getItens();
    echo "Itens no inventário de {$player->getNome()}:";
    echo "<br>";

    foreach ($itens as $item) {
        echo "- {$item->getNome()} ({$item->getTamanho()})";
        echo "<br>";
    }

    echo "Total de itens: " . count($itens);
    echo "<br>";
}


echo "Preenchendo inventário de {$player1->getNome()}:";
echo "<br>";

foreach (array_merge($itensAtaque, $itensDefesa, $itensMagia) as $item) {
    if ($player1->coletarItem($item)) {
        echo "{$item->getNome()} ({$item->getTamanho()}) adicionado ao inventário.";
        echo "<br>";
    } else {
        echo "{$item->getNome()} ({$item->getTamanho()}) não coube no inventário.";
    }
}

exibirInventario($player1);

echo "{$player1->getNome()} subiu de nível!";
$player1->subirLvl();
echo "<br>";
echo "Capacidade do inventário aumentada.";
echo "<br>";

$itemExtra = new Ataque('Machado');
if ($player1->coletarItem($itemExtra)) {
    echo "{$itemExtra->getNome()} ({$itemExtra->getTamanho()}) adicionado ao inventário após subir de nível.";
} else {
    echo "{$itemExtra->getNome()} ({$itemExtra->getTamanho()}) ainda não coube no inventário.";
}
echo "<br>";

exibirInventario($player1);
echo "<br>";

echo "Adicionando itens ao inventário de {$player2->getNome()}:";
foreach ($itensMagia as $item) {
    if ($player2->coletarItem($item)) {
        echo "<br>";
        echo "{$item->getNome()} ({$item->getTamanho()}) adicionado ao inventário.";
    } else {
        echo "<br>";
        echo "{$item->getNome()} ({$item->getTamanho()}) não coube no inventário.";
    }
}
echo "<br>";

echo "<br>";
echo "Estado final do inventário de {$player2->getNome()}:";
echo "<br>";
exibirInventario($player2);
?>
