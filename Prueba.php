<?php
    require_once 'Cliente.php';
    $c1 = new Cliente("Paula Domínguez");
    $c2 = new Cliente("Rocío González");
?>

<ol>
    <li>
        <?= $c1->getNombre()?>
    </li>
    <li>
        <?= $c2->getNombre()?>
    </li>
</ol>