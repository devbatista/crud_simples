<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/usuarios/listarTodos', 'UsuariosController@listarTodos');
$router->get('/usuarios/listarUsuario', 'UsuariosController@listarUsuario');

$router->post('/usuarios/inserirUsuario', 'UsuariosController@inserirUsuario');
$router->post('/usuarios/alterarUsuario', 'UsuariosController@alterarUsuario');

$router->get('/usuarios/deletarUsuario', 'UsuariosController@deletarUsuario');

$router->post('/email/phpmailer', 'EmailController@enviarPHPMailer');
$router->post('/email/mail', 'EmailController@enviarMail');