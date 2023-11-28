<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function showToko(){
        return view('toko.all',[
            'title' => 'Toko',
            'toko' =>  Toko::all()
        ]);
    }

    public function detailToko(string $id){
        return view('toko.detail',[
            'title' => 'Detail Toko',
            'toko' => Toko::findOrFail($id)
        ]);
    }
}
