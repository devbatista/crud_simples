<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller
{

    public $usuarios;

    public function __construct()
    {
        $this->usuarios = new Usuario();
    }

    public function listarTodos()
    {
        $data = $this->usuarios->getAll();
        echo json_encode($data);
    }

    public function listarUsuario()
    {
        $id = $_GET['id'];

        echo json_encode($this->usuarios->getUserByID($id));
    }

    public function inserirUsuario()
    {
        $dados = $_POST;

        echo json_encode($this->usuarios->insertUser($dados));
    }

    public function alterarUsuario()
    {
        $dados = $_POST;

        echo json_encode($this->usuarios->alterUser($dados));
    }

    public function deletarUsuario()
    {
        $id = $_GET['id'];

        echo json_encode($this->usuarios->deleteUser($id));
    }
}
