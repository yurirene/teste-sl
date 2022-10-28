<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrimeiraQuestaoRequest extends FormRequest
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
            'name' => 'required',
            'userName' => [
                'required',
                'unique:primeira_questao,username',
                'regex:/^\S+$/'
            ],
            'password' => [
                'required',
                'min: 8',
                'regex: /[0-9]/',
                'regex:/[A-Za-z.\s_-]+/'
            ],
            'zipCode' => 'required',
            'email' => [
                'required',
                'email:dns',
                'unique:primeira_questao,email'
            ]
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nome Completo',
            'userName' => 'Nome de Login',
            'password' => 'Senha',
            'zipCode' => 'CEP',
            'email' => 'Email'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'password.min' => 'O campo senha deve ter no mínimo 8 dígitos',
            'userName.regex' => 'O campo :attribute não deve conter espaços',
            'password.regex' => 'O campo senha deve ter ao menos 1 dígito numérico e 1 letra',
            'unique' => 'Já existe um registro para esse  :attribute',
            'email' => 'Email inválido'
        ];
    }
}
