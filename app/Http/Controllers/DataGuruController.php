<?php

namespace App\Http\Controllers;

use App\Models\DataGuruModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class DataGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DataGuruModel::orderBy('id', 'desc')->get();
        return view('guru.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:data_guru,nip',
        ]);

        DataGuruModel::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        Alert::success('Berhasil', 'Data guru berhasil ditambahkan');
        return redirect()->route('data-guru.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DataGuruModel::findOrFail($id);
        return view('guru.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = DataGuruModel::findOrFail($id);
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guru = DataGuruModel::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:data_guru,nip,' . $id,
        ]);

        $guru->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

         Alert::success('Berhasil', 'Data guru berhasil diupdate');
        return redirect()->route('data-guru.index');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = DataGuruModel::findOrFail($id);
        $guru->delete();

         Alert::success('Berhasil', 'Data guru berhasil dihapus');
        return redirect()->route('data-guru.index');

    
    }
}
