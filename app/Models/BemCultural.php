<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BemCultural extends Model
{
    protected $table   = 'bens_culturais';
    protected $guarded = [];
    protected $hidden  = ['categoria_id', 'localizacao_id'];
    protected $with    = ['categoria', 'localizacao', 'imagens'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function localizacao()
    {
        return $this->belongsTo(Localizacao::class);
    }

    public function imagens()
    {
        return $this->hasMany(Imagem::class);
    }
}
