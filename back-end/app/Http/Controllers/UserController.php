<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest as UserRequest;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Faz o display de todos os usuarios registrados
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return response()->json(['users' => $users]);
    }

    /**
     * Cria um novo usuario.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UserRequest $request)
    {
        $user = new User;
        $user->createUser($request);
        return response()->json(['user' => $user]);
    }

    /**
     * Faz o display do usuario atraves de seu identificador unico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json(['user' => $user]);
    }

    /**
     * Atualiza o usuario especificado no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->updateUser($request);
        return response()->json(['user' => $user]);
    }

    /**
     * Remove o usuario especificado do banco de dados.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user = User::destroy($id);
        return response()->json(['message' => 'User deletado.']);
    }
}
