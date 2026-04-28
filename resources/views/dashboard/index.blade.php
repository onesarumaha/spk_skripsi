@extends('layout.app')

@section('content')

<div class="content-wrapper">

    {{-- HEADER --}}
    <div class="row mb-4">
        <div class="col-md-12">
            <h3 class="font-weight-bold">Dashboard SPK Guru</h3>
            <h6 class="font-weight-normal mb-0">
                Selamat Datang di Sistem Pendukung Keputusan Penilaian Guru Metode SAW
            </h6>
        </div>
    </div>

    {{-- CARD INFO --}}
    <div class="row">

        {{-- TOTAL GURU --}}
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h4 class="mb-2">Total Guru</h4>
                    <h2>{{ $guru }}</h2>
                    <p>Data Guru Terdaftar</p>
                </div>
            </div>
        </div>

        {{-- TOTAL KRITERIA --}}
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h4 class="mb-2">Kriteria</h4>
                    <h2>{{ $kriteria }}</h2>
                    <p>Total Kriteria Penilaian</p>
                </div>
            </div>
        </div>

        {{-- TOTAL PENILAIAN --}}
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h4 class="mb-2">Penilaian</h4>
                    <h2>{{ $penilaian }}</h2>
                    <p>Total Data Penilaian</p>
                </div>
            </div>
        </div>

        {{-- TOTAL USER --}}
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h4 class="mb-2">User</h4>
                    <h2>{{ $user }}</h2>
                    <p>Pengguna Sistem</p>
                </div>
            </div>
        </div>

    </div>

    {{-- MENU CEPAT --}}
    <div class="row">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Menu Cepat</h4>

                    <div class="row text-center">

                        <div class="col-md-3 mb-3">
                            <a href="{{ route('data-guru.index') }}" class="btn btn-outline-primary btn-block">
                                Data Guru
                            </a>
                        </div>

                        <div class="col-md-3 mb-3">
                            <a href="{{ route('kriteria.index') }}" class="btn btn-outline-success btn-block">
                                Data Kriteria
                            </a>
                        </div>

                        <div class="col-md-3 mb-3">
                            <a href="{{ route('penilaian') }}" class="btn btn-outline-warning btn-block">
                                Penilaian
                            </a>
                        </div>

                        <div class="col-md-3 mb-3">
                            <a href="{{ route('saw.rangking') }}" class="btn btn-outline-danger btn-block">
                                Ranking SAW
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    {{-- INFO --}}
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Informasi Sistem</h4>

                    <table class="table table-bordered">
                        <tr>
                            <th width="300">Nama Aplikasi</th>
                            <td>SPK Penilaian Guru</td>
                        </tr>
                        <tr>
                            <th>Metode</th>
                            <td>Simple Additive Weighting (SAW)</td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td>{{ date('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <th>User Login</th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                    </table>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection