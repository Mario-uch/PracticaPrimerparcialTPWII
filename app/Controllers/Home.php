<?php

namespace App\Controllers;
use App\Models\mUsuarios;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function registro()
    {
        return view('vRegistro');
    }

    public function insertarForm()
    {
        $mUsuarios = new mUsuarios();
        $usuarioNuevo =[
            "nombre" => $_POST['nombre'],
            "telefono" => $_POST['telefono'],
            "usuario" => $_POST['email'],
            "password" => $_POST['password']
        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mUsuarios->
            db->insertID();
        return view("vSuccess",$datoId);
    }
}
