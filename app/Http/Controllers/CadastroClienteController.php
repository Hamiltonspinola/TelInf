<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Models\CadastroCliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CadastroClienteController extends Controller
{
    public function index()
    {
        $usuario = User::get()->find(auth()->user()->id);
        $cliente = CadastroCliente::with('user')->get();
        return view('dashboard', compact('cliente', 'usuario'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(StoreClienteRequest $request)
    {
        $user = User::where('id', $request->user()->id)->get()->first();
        if($request->estado === "BA")
        {
            $data_nascimento = date_create($request->data_nascimento);
            $data_atual = date_create();
            $idade = date_diff($data_atual, $data_nascimento);
            $resultato = date_interval_format($idade, '%y');
            
            if($resultato> 18)
            {
                $response = $user->clientes()->create($request->all());
                return redirect()
                        ->route('dashboard')
                        ->with('success', $response['message']);
            }
            
            return redirect()
                    ->back()
                    ->with('error', 'Idade insuficiente para cadastro');
        }
        $validate = $request->validate(['rg' => 'required']);
        $response = $user->clientes()
                ->create($request->all());

                if(!$response)
                {
                    redirect()
                    ->back()
                    ->with('error', $response['message']);
                }
        
    }
    public function show()
    {
        $usuario = User::get()->find(auth()->user()->id);
        $cliente = CadastroCliente::with('user')->get();
        return view('cliente.show', compact('cliente', 'usuario'));
    }

    public function edit($id)
    {
        $cliente = CadastroCliente::where('id', $id)->get()->first();
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = CadastroCliente::find($id);
        $cliente->update($request->all());

        return redirect()->route('cliente.show');
    }

    public function destroy($id)
    {
        $cliente = CadastroCliente::find($id);
        $cliente->delete();

        return redirect()->route('cliente.show')->with('error', 'Usuário excluido com sucesso!');
    }
}
