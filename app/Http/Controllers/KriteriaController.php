<?php

namespace App\Http\Controllers;

use App\Models\KriteriaModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = KriteriaModel::orderBy('id', 'desc')->get();
        return view('kriteria.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'kode' => 'required|unique:kriteria,kode',
            'nama' => 'required',
            'bobot' => 'required|numeric',
            'tipe' => 'required|in:benefit,cost',
        ]);

        KriteriaModel::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'bobot' => $request->bobot,
            'tipe' => $request->tipe,
        ]);


        Alert::success('Berhasil', 'Kriteria berhasil ditambahkan');
        return redirect()->route('kriteria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kriteria = KriteriaModel::findOrFail($id);
        return view('kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kriteria = KriteriaModel::findOrFail($id);

        $request->validate([
            'kode' => 'required|unique:kriteria,kode,' . $id,
            'nama' => 'required',
            'bobot' => 'required|numeric',
            'tipe' => 'required|in:benefit,cost',
        ]);

        $kriteria->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'bobot' => $request->bobot,
            'tipe' => $request->tipe,
        ]);

        Alert::success('Berhasil', 'Kriteria berhasil diupdate');
        return redirect()->route('kriteria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = KriteriaModel::findOrFail($id);
        $guru->delete();

         Alert::success('Berhasil', 'Kriteria berhasil dihapus');
        return redirect()->route('kriteria.index');
    }
}
