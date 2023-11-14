<?php

namespace App\Http\Controllers;

use App\Models\coffe;

class CoffeController extends Controller
{
    public function kopi()
    {
        return view('kopi.coffe',
        [
            'title' => 'Kopi',
            'coffe' => coffe::all()
        ]);

    }

    public function show(string $id)
    {
        return view('kopi.detail', [
            "title" => "Detail coffe",
            "coffe" => coffe::findOrFail($id),
            ]);
        }
}
