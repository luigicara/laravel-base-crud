<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    
    public function home() {

        $saints = Saint::get();

        $data = [
            'saints' => $saints
        ];

        return view('pages.home', $data);
    }

    public function show($id) {

        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];

        return view('pages.saint', $data);
    }
}
