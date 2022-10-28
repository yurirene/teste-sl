<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimeiraQuestao extends Model
{
    protected $table = 'primeira_questao';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
