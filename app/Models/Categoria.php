<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nome'];

    public function bensCulturais()
    {
        return $this->hasMany(BemCultural::class);
    }
}
