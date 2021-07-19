<?php

namespace Database\Seeders;

use App\Models\CadastroCliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CadastroCliente::create([
            'name' => 'Hamilton Morais',
            'rg' => '1564985215',
            'cpf'   =>  '04708200552',
            'telefone' => '71996911996',
            'data_nascimento'   =>  '06/06/1996',
            'estado'    => 'BA',
            'password'  => bcrypt(12345678),
            'password'  => bcrypt('12345678')
        ]);
    }
}
