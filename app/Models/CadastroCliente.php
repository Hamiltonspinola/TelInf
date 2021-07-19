<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroCliente extends Model
{
    use HasFactory; 

    protected $fillable = ['name', 'rg', 'cpf', 'data_nascimento', 'telefone', 'estado'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
