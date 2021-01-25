<?php 

require 'vendor/autoload.php';

use Projeto\Usuario;
use Projeto\Permissao;

$permissao = new Permissao;
$usuario = new Usuario($permissao);
$usuario->preencherDados('Jon Dude', '21988887777', 1);
$usuario->cadastrar(); 

// Usei o método mágico __toString para o objeto poder ser impresso
echo $usuario . PHP_EOL;;
// Podemos imprimir através dos métodos auxiliares get's
echo $usuario->getNome() . PHP_EOL;
echo $usuario->getTelefone() . PHP_EOL;
echo $permissao->getNivel() . PHP_EOL;
echo $usuario->getDataCadastro();




