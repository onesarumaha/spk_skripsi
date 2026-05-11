@extends('layout.app')

@section('content')

<div class="content-wrapper">

    <div class="row">

        <div class="col-md-12">
            <h4 class="mb-4">Laporan Sistem SPK Guru</h4>
        </div>

        {{-- TOTAL GURU --}}
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h3>{{ $guru }}</h3>
                    <p>Total Data Guru</p>
                </div>
            </div>
        </div>

        {{-- TOTAL KRITERIA --}}
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h3>{{ $kriteria }}</h3>
                    <p>Total Kriteria</p>
                </div>
            </div>
        </div>

        {{-- TOTAL PENILAIAN --}}
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h3>{{ $penilaian }}</h3>
                    <p>Total Penilaian</p>
                </div>
            </div>
        </div>

        {{-- TABEL RINGKASAN --}}
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Ringkasan Laporan</h4>

                    <table class="table table-bordered">
                        <tr>
                            <th width="300">Nama Sistem</th>
                            <td>SPK Penilaian Guru Metode SAW</td>
                        </tr>
                       <tr>
                        <th>Cetak</th>
                            <td>
                                <a href="{{ route('laporan.cetakPdf') }}" target="_blank" class="btn btn-danger btn-sm">
                                    <i class="mdi mdi-printer"></i> Cetak PDF
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>Total Guru</th>
                            <td>{{ $guru }}</td>
                        </tr>
                        <tr>
                            <th>Total Kriteria</th>
                            <td>{{ $kriteria }}</td>
                        </tr>
                        <tr>
                            <th>Total Penilaian</th>
                            <td>{{ $penilaian }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection