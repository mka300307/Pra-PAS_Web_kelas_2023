<?php

namespace App\Http\Controllers;

use App\Models\barista;
use Illuminate\Http\Request;

class BaristaController extends Controller
{
    public function barista()
    {
        return view('baristas.barista',
        [
            'title' => 'Barista',
            'barista' => barista::all()
        ]);
    }

    public function showb(string $id)
    {
        return view('baristas.detail', [
            'title' => 'Detail barista',
            'barista'=> barista::findOrFail($id),
        ]);
    }
}
