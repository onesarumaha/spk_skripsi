<?php

namespace App\Http\Controllers;

use App\Models\DataGuruModel;
use App\Models\KriteriaModel;
use App\Models\PenilaianModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PenilaianModel::orderBy('id', 'desc')->get();
        // dd($data);
        return view('penilaian.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
        $guru = DataGuruModel::orderBy('id', 'desc')->get();
        $kriteria = KriteriaModel::orderBy('id', 'desc')->get();

        return view('penilaian.create', compact('guru', 'kriteria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         PenilaianModel::create([
            'guru_id' => $request->guru_id,
            'kriteria_id' => $request->kriteria_id,
            'nilai' => $request->nilai
        ]);


         Alert::success('Berhasil', 'Penilaian guru berhasil ditambahkan');
        return redirect()->route('penilaian');
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
        $guru = DataGuruModel::orderBy('id', 'desc')->get();
        $kriteria = KriteriaModel::orderBy('id', 'desc')->get();
        $penilaian = PenilaianModel::findOrFail($id);

        return view('penilaian.edit', compact(
            'guru',
            'kriteria',
            'penilaian'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'guru_id' => 'required',
            'kriteria_id' => 'required',
            'nilai' => 'required|numeric'
        ]);

        $penilaian = PenilaianModel::findOrFail($id);

        $penilaian->update([
            'guru_id' => $request->guru_id,
            'kriteria_id' => $request->kriteria_id,
            'nilai' => $request->nilai
        ]);

        Alert::success('Berhasil', 'Penilaian guru berhasil diupdate');
        return redirect()->route('penilaian');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = PenilaianModel::findOrFail($id);
        $guru->delete();

         Alert::success('Berhasil', 'Penilaian berhasil dihapus');
        return redirect()->route('penilaian');
    }
}
