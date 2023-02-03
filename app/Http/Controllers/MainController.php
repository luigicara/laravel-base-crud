<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    // --- INDEX
    public function home() {

        $saints = Saint::orderBy('created_at', 'DESC') -> get();

        return view('pages.home', compact('saints'));
    }

    // --- SHOW
    public function saintShow($id) {

        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];

        return view('pages.saintShow', $data);
    }

    // --- DELETE
    public function saintDestroy($id) {

        $saint = Saint::find($id);
        $saint -> delete();

        return redirect() -> route('home');
    }

    // --- CREATE
    public function saintCreate() {

        return view('pages.saintCreate');
    }

    public function saintStore(Request $request) {

        $data = $request->all();

        $saint = new Saint();

        $saint -> name = $data['name'];
        $saint -> birthPlace = $data['birthPlace'];
        $saint -> blessingDate = $data['blessingDate'];
        $saint -> miracleCount = $data['miracleCount'];

        $saint -> save();
        
        return redirect() -> route('home');
    }
}
