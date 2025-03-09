<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            'Patrimônio Material',
            'Patrimônio Imaterial',
            'Patrimônio Natural'
            // 'Patrimônio Misto'
        ];

        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert([
                'nome' => $categoria,
            ]);
        }
    }
}
