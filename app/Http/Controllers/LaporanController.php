<?php

namespace App\Http\Controllers;

use App\Models\DataGuruModel;
use App\Models\KriteriaModel;
use App\Models\PenilaianModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class LaporanController extends Controller
{
    public function index()
    {
        $guru = DataGuruModel::count();
        $kriteria = KriteriaModel::count();
        $penilaian = PenilaianModel::count();

        return view('laporan.index', compact(
            'guru',
            'kriteria',
            'penilaian'
        ));
    }

    public function cetakPdf()
    {
        // Ringkasan data
        $guru      = DataGuruModel::count();
        $kriteria  = KriteriaModel::count();
        $penilaian = PenilaianModel::count();

        /*
        |--------------------------------------------------------------------------
        | Ambil Ranking Guru Terbaik
        |--------------------------------------------------------------------------
        */
        $ranking = PenilaianModel::select(
                'guru_id',
                \DB::raw('SUM(nilai) as nilai_akhir')
            )
            ->groupBy('guru_id')
            ->with('guru') // relasi ke tabel guru
            ->orderByDesc('nilai_akhir')
            ->get();

        $pdf = Pdf::loadView('laporan.pdf', compact(
            'guru',
            'kriteria',
            'penilaian',
            'ranking'
        ))->setPaper('A4', 'portrait');

        return $pdf->download('laporan-ranking-guru-terbaik.pdf');
    }
}
