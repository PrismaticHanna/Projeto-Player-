<?php
require_once 'Item.php';
class Magia extends Item {
    public function __construct($nome) {
        parent::__construct($nome, 2);
    }
}
?>