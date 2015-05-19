<?php
/**
 * Contem lista de rotas do sistema
 */
$rotas = [];

$rotas['/home/'] = 'home.view.php';
$rotas['/'] = 'home.view.php';
$rotas['404'] = '404.php';
$rotas['/clientes/'] = 'clientes.view.php';
$rotas['/cliente/'] = 'cliente.view.php';

return $rotas;