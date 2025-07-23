<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        // akses file
        //    $files = Storage::files('public');
        //     return response()->json(['data' => $files]);

        // write file
    //     $data = [
    //         "name" => "Asma",
    //         "balance" => 900
    //     ];
    //    Storage::disk('public')->prepend('account/account.txt', json_encode($data));

    //     return response()->json(['data' => $data]);

        // get data from file
        // $content = Storage::disk('public')->get('account/account.txt');
        // $datas = explode("\n", $content);
        // $dataJson = [];
        // foreach ($datas as $data) {
        //     $dataJson[] = json_decode($data);
        // }

        // return response()->json(['data' => $dataJson]);

        // download file
        // return Storage::disk('public')->download('account/account.txt');

        // delete file
        return Storage::disk('public')->delete('account/account.txt');

    }
}
