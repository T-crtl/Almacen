<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\api\Usuarios;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return Usuarios::collection($usuarios);
    }
    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->save();
    }
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = null;
        $user->save();
    }
    public function delete(User $user)
    {
        $user->delete();
    }
}
