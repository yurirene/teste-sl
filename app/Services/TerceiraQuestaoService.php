<?php

namespace App\Services;

use App\Models\Info;
use App\Models\PrimeiraQuestao;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TerceiraQuestaoService
{
    /**
     * @return array
     */
    public static function getUsuarios() : array
    {
        try {
            return Usuario::all()->map(function($item) {
                return [
                    'id' => $item->id,
                    'nome' => $item->nome,
                    'cpf' => $item->cpf
                ];
            })->toArray();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * @return array
     */
    public static function getInfos() : array
    {
        try {
            return Info::all()->map(function($item) {
                return [
                    'id' => $item->id,
                    'cpf' => $item->cpf,
                    'genero' => $item->genero,
                    'ano_nascimento' => $item->ano_nascimento
                ];
            })->toArray();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * @return array
     */
    public static function getResultado() : array
    {
        try {
            $resultado_query = DB::select(DB::raw("
                SELECT 
                    CONCAT(usuarios.nome, ' - ', infos.genero) as usuario,
                    CASE WHEN (YEAR(CURDATE()) - infos.ano_nascimento > 50) THEN 'SIM' ELSE 'NÃO' END maior_50_anos
                FROM usuarios 
                JOIN infos ON infos.cpf = usuarios.cpf
                WHERE infos.genero = 'M'
                ORDER BY usuarios.cpf asc
                LIMIT 3"));
            return array_map(function($item) {
                return [
                    'usuario' => $item->usuario,
                    'maior_50_anos' => $item->maior_50_anos
                ];
            }, $resultado_query);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


}