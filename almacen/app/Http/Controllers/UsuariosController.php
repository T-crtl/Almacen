<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\Usuarios;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return new Usuarios($usuarios);
    }
    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->save();
    }
    public function update(Request $request, User $user)
    {
        $user = new User();
        $user->name = $request->name;
        $user->save();
    }
    public function delete(User $user)
    {
        $user->delete();
    }
}
