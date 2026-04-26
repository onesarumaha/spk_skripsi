@extends('layout.app')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Kriteria</h4>

                    <form action="{{ route('kriteria.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Kode Kriteria</label>
                            <input type="text" name="kode" class="form-control" placeholder="Contoh: C1" required>
                        </div>

                        <div class="form-group">
                            <label>Nama Kriteria</label>
                            <input type="text" name="nama" class="form-control" placeholder="Contoh: Absensi" required>
                        </div>

                        <div class="form-group">
                            <label>Bobot</label>
                            <input type="number" step="0.01" name="bobot" class="form-control" placeholder="Contoh: 0.25" required>
                        </div>

                        <div class="form-group">
                            <label>Tipe</label>
                            <select name="tipe" class="form-control" required>
                                <option value="">-- Pilih Tipe --</option>
                                <option value="benefit">Benefit</option>
                                <option value="cost">Cost</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="{{ route('kriteria.index') }}" class="btn btn-light">Kembali</a>
                    </form>

                </div>
            </div>   
        </div>
    </div>    
</div>

@endsection