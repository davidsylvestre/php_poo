<?php
require_once('Pessoa.php');

$pessoa1 = new Pessoa('David', 24);

$pessoa1->correr();

dump($pessoa1);