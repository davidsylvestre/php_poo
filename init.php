<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('config/rotas.php');
require_once('functions/funcRota.php');
require_once('src/Cliente.php');

/** @var array Cliente $clientes */
function getClientes(){
    $clientes = [];

    $clientes[] = new Cliente(1, 'David', '999.999.999-99', 'xpto', new \DateTime('1990-10-05'));
    $clientes[] = new Cliente(2, 'Alberto', '999.999.999-99', 'xpto', new \DateTime('1990-08-05'));
    $clientes[] = new Cliente(3, 'Asdrubal', '999.999.999-99', 'xpto', new \DateTime('1985-07-15'));
    $clientes[] = new Cliente(4, 'Roberto', '999.999.999-99', 'xpto', new \DateTime('1990-02-28'));
    $clientes[] = new Cliente(5, 'Nina', '999.999.999-99', 'xpto', new \DateTime('1993-04-27'));
    $clientes[] = new Cliente(6, 'Arthur', '999.999.999-99', 'xpto', new \DateTime('1985-03-07'));
    $clientes[] = new Cliente(7, 'Roseane', '999.999.999-99', 'xpto', new \DateTime('1985-09-05'));
    $clientes[] = new Cliente(8, 'Jaqueline', '999.999.999-99', 'xpto', new \DateTime('1990-09-08'));
    $clientes[] = new Cliente(9, 'Robson', '999.999.999-99', 'xpto', new \DateTime('1982-01-21'));
    $clientes[] = new Cliente(10, 'Carlos', '999.999.999-99', 'xpto', new \DateTime('1990-11-11'));

    return $clientes;
}
