<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    protected $table = 'localizacoes';
    protected $fillable = ['endereco', 'cidade', 'estado', 'cep', 'latitude', 'longitude'];
}
