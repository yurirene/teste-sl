<?php

namespace Database\Seeders;

use App\Models\Info;
use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Questao3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
            1 => [
                'cpf' => '16798125050',
                'nome' => 'Luke Skywalker'
            ],
            2 => [
                'cpf' => '59875804045',
                'nome' => 'Bruce Wayne'
            ],
            3 => [
                'cpf' => '04707649025',
                'nome' => 'Diane Prince'
            ],
            4 => [
                'cpf' => '21142450040',
                'nome' => 'Bruce Banne'
            ],
            5 => [
                'cpf' => '83257946074',
                'nome' => 'Harley Quinn'
            ],
            6 => [
                'cpf' => '07583509025',
                'nome' => 'Peter Parker'
            ],
        ];

        $infos = [
            1 => [
                'cpf' => '16798125050',
                'genero' => 'M',
                'ano_nascimento' => 1976
            ],
            2 => [
                'cpf' => '59875804045',
                'genero' => 'M',
                'ano_nascimento' => 1960
            ],
            3 => [
                'cpf' => '04707649025',
                'genero' => 'F',
                'ano_nascimento' => 1988
            ],
            4 => [
                'cpf' => '21142450040',
                'genero' => 'M',
                'ano_nascimento' => 1954
            ],
            5 => [
                'cpf' => '83257946074',
                'genero' => 'F',
                'ano_nascimento' => 1970
            ],
            6 => [
                'cpf' => '07583509025',
                'genero' => 'M',
                'ano_nascimento' => 1972
            ],
        ];

        DB::beginTransaction();

        foreach ($usuarios as $id => $usuario) {
            Usuario::updateOrCreate([
                'id' => $id
            ], $usuario);
        }

        foreach ($infos as $id => $info) {
            Info::updateOrCreate([
                'id' => $id
            ], $info);
        }

        DB::commit();
    }
}
