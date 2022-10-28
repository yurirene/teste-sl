<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrimeiraQuestaoRequest;
use App\Services\PrimeiraQuestaoService;
use App\Services\TerceiraQuestaoService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $usuarios_terceira_questao = TerceiraQuestaoService::getUsuarios();
        $infos_terceira_questao = TerceiraQuestaoService::getInfos();
        $resultados_terceira_questao = TerceiraQuestaoService::getResultado();
        return view('home', compact('usuarios_terceira_questao', 'infos_terceira_questao', 'resultados_terceira_questao'));
    }

    public function store(PrimeiraQuestaoRequest $request)
    {
        try {
            PrimeiraQuestaoService::store($request->all());
            return response()->json([
                'message' => [
                    'status' => true,
                    'text' => 'Cadastro Realizado com Sucesso'
                ]
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => [
                    'status' => false,
                    'text' => 'Erro ao realizar cadastro'
                ]
            ], 500);
        }
    }

    public function search(Request $request)
    {
        try {
            $resposta = PrimeiraQuestaoService::search($request->all());
            return response()->json([
                'data' => $resposta 
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => [
                    'status' => false,
                    'text' => 'Erro ao realizar busca'
                ]
            ], 500);
        }
    }
}
