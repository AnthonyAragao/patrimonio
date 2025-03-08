<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BemCultural;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PatrimonioController extends Controller
{
    public function __construct(
        private BemCultural $bemCultural
    ){}

    public function index()
    {
        $bensCulturais = $this->bemCultural->paginate(10);
        $categorias = Categoria::all();

        return Inertia::render('Admin/BemCultural/Index', [
            'bensCulturais' => $bensCulturais,
            'categorias' => $categorias
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/BemCultural/Form',[
            'categorias' => Categoria::all()
        ]);
    }


    public function store(Request $request)
    {}

    public function show(string $id)
    {}


    public function edit(string $id)
    {}

    public function update(Request $request, string $id)
    {}

    public function destroy(string $id)
    {}
}
