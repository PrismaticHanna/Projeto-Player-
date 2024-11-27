<?php
require_once 'Item.php';
class Defesa extends Item {
    public function __construct($nome) {
        parent::__construct($nome, 4);
    }
}
?>