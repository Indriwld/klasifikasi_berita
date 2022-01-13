<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function index()
    {
        //Menampilkan data Table Kategori
        $kategori = Kategori::all();

        //ubah ke json
        return response()->json([
            'success' => true,
            'message' => 'List Data Kategori',
            'data' => $kategori,
        ], 200);

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $kategori = new Kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        //ubah ke json
        return response()->json([
            'success' => true,
            'message' => 'List Tambah Kategori',
            'data' => $kategori,
        ], 200);
    }

    public function show($id)
    {
        $kategori = Kategori::find($id);

//ubah ke json
        return response()->json([
            'success' => true,
            'message' => 'List Data Kategori',
            'data' => $kategori,
        ], 200);

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Kategori Berhasil Diedit',
            'data' => $kategori,
        ], 200);

    }

}
