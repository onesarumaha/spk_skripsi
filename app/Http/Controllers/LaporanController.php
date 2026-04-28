<?php

namespace App\Http\Controllers;

use App\Models\DataGuruModel;
use App\Models\KriteriaModel;
use App\Models\PenilaianModel;
use Illuminate\Http\Request;

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
}
