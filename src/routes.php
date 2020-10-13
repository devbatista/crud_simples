<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/usuarios/listarTodos', 'UsuariosController@listarTodos');
$router->get('/usuarios/listarUsuario', 'UsuariosController@listarUsuario');

$router->post('/usuarios/inserirUsuario', 'UsuariosController@inserirUsuario');
$router->post('/usuarios/alterarUsuario', 'UsuariosController@alterarUsuario');

$router->get('/usuarios/deletarUsuario', 'UsuariosController@deletarUsuario');