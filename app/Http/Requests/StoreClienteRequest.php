<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4',
            'cpf'   => 'required',
            'telefone'  => 'min:11'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo Nome é obrigatório.',
            'name.min:'    => 'Quantidade mínima de caracteres para o campo Nome insuficiente',
            'cpf.required'  => 'O campo CPF é obrigatório',
            'telefone.min'  =>  'Caracteres insuficiente para o campo Telefone ',
            'rg.required'   => 'O campo RG é obrigatório para clientes de SP'
        ];
        
    }
}
