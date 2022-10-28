<?php

namespace App\Services;

use App\Models\PrimeiraQuestao;
use Illuminate\Support\Facades\Hash;

class PrimeiraQuestaoService
{
    /**
     * @param array $request dados a serem inseridos no banco
     * @return PrimeiraQuestao
     */
    public static function store(array $request) : ?PrimeiraQuestao
    {
        try {
            return PrimeiraQuestao::create([
                'name' => $request['name'],
                'username' => $request['userName'],
                'zipcode' => $request['zipCode'],
                'email' => $request['email'],
                'password' => Hash::make($request['password'])
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * @param array $request dados a serem buscados no banco
     * @return array valores encontrados
     */
    public static function search(array $request) : ?array
    {
        try {
            return PrimeiraQuestao::when(!empty($request['termo']), function($sql) use ($request) {
                return $sql->where('name', 'like', '%'. $request['termo'] . '%')
                    ->orWhere('username', 'like', '%'. $request['termo'] . '%')
                    ->orWhere('email', 'like', '%'. $request['termo'] . '%')
                    ->orWhere('zipcode', 'like', '%'. $request['termo'] . '%');
                })
                ->get()
                ->map(function($item) {
                    return [
                        'name' => $item->name, 
                        'username' => $item->username, 
                        'email' => $item->email, 
                        'zipcode' => $item->zipcode
                    ];
                })
                ->toArray();
        } catch (\Throwable $th) {
            throw $th;
        }
    }


}