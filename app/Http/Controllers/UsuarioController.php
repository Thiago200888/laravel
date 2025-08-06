<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resquest;
use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;

class UsuarioController extends Controller
{
    function registrar(Request $dados) { 
        Usuario::create($dados->all());
    }

    function login(Request $dados) { }

    function logout(Request $dados) { }

    function fotoUpload(Request $dados) { }

    function desativaConta(Request $dados) { }

    function perfil(Request $dados) { }

    function editar(Request $dados) { }


}
