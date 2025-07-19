<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use App\Models\PerusahaanDetail;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function perusahaan($id)
    {
        $perusahaan = Perusahaan::with(['detail' => function($query) {
            $query->select('founder', 'address', 'perusahaan_id');
        }])
        ->select('id', 'name')
        ->where('id', $id)->first();
        return response()->json([
            'data' => $perusahaan
        ]);
    }

    public function detail($id)
    {
        $detail = PerusahaanDetail::with('perusahaan', 'perusahaan.brand')
            ->where('perusahaan_id', $id)->first();
        
        return response()->json([
            'data' => $detail
        ]);
    }

    public function brand($id)
    {
        $brand = Perusahaan::with('brand')->where('id', $id)->first();

        return response()->json([
            'data' => $brand
        ]);
    }

}
