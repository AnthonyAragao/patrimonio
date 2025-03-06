<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BemCultural;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BemCulturalController extends Controller
{
    public function __construct(
        private BemCultural $bemCultural
    ){}

    public function index()
    {
        $bensCulturais = $this->bemCultural->get();
        dd($bensCulturais[0]);

        return Inertia::render('Admin/BemCultural/Index', [
            'bensCulturais' => $bensCulturais
        ]);
    }

    public function create()
    {}


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
