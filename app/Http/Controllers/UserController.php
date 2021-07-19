<?php

namespace App\Http\Controllers;

use App\Models\CadastroCliente;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = User::find(auth()->user()->id);
        return view('dashboard', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::get();
        $user->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find(auth()->user()->id)->get()->first();
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find(auth()->user()->id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find(auth()->user()->id);
        if(empty($request->password))
        {
            $request->password = $request->passwprd;
            $user->update($request->all());
        }

        $user->update($request->all());
        if($user)
        {
            return redirect()
                    ->route('dashboard', $user->id)
                    ->with('success', 'Atualizado com sucesso');
        }
        return redirect()
                    ->back()
                    ->with('error', 'Erro ao atualizar');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find(auth()->user()->id);
        $user->delete();

        return redirect()
                    ->route('register')
                    ->with('success', 'Usuário excluído');

    }
}
