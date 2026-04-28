<?php

namespace App\Http\Controllers;

use App\Models\DataGuruModel;
use App\Models\KriteriaModel;
use App\Models\PenilaianModel;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = DataGuruModel::all();
        $kriteria = KriteriaModel::all();

        return view('saw.matrix', compact('guru','kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function normalisasi()
    {
        $guru = DataGuruModel::all();
        $kriteria = KriteriaModel::all();

        return view('saw.normalisasi', compact('guru','kriteria'));
    }

    public function rangking()
    {
         $guru = DataGuruModel::all();
        $kriteria = KriteriaModel::all();

        $hasil = [];

        foreach ($guru as $g) {

            $total = 0;

            foreach ($kriteria as $k) {

                $nilai = PenilaianModel::where('guru_id',$g->id)
                        ->where('kriteria_id',$k->id)
                        ->value('nilai');

                if(!$nilai){
                    $nilai = 0;
                }

                if($k->atribut == 'benefit'){

                    $max = PenilaianModel::where('kriteria_id',$k->id)->max('nilai');

                    $normalisasi = $max > 0 ? $nilai / $max : 0;

                }else{

                    $min = PenilaianModel::where('kriteria_id',$k->id)->min('nilai');

                    $normalisasi = $nilai > 0 ? $min / $nilai : 0;
                }

                $total += $normalisasi * $k->bobot;
            }

            $hasil[] = [
                'nama' => $g->nama,
                'nilai' => $total
            ];
        }

        usort($hasil, fn($a,$b) => $b['nilai'] <=> $a['nilai']);

        return view('saw.ranking', compact('hasil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
