<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    public function index() {
        $rumah = Rumah::all();
        return response()->json(['data' => $rumah]);
    }

    public function store(Request $request) {
        $request->validate([
            'warna' => 'required',
            'ukuran' => 'required',
            'harga' => 'required',
        ]);
        
        $rumah = Rumah::create($request->all());
        return response()->json(['data' => $rumah]);
    }

    public function show(Rumah $rumah) {
        return response()->json(['data' => $rumah]);
    }

    public function update(Request $request, Rumah $rumah) {
        $request->validate([
            'warna' => 'required',
            'ukuran' => 'required',
            'harga' => 'required',
        ]);

        $rumah->update($request->all());
        return response()->json(['data' => $rumah]);
    }

    public function destroy(Rumah $rumah) {
        $rumah->delete();

        return response()->json(['data' => null]);
    }
}
