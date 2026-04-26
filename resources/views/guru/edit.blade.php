@extends('layout.app')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Guru</h4>

                    <form action="{{ route('data-guru.update', $guru->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input type="text" name="nama" class="form-control"
                                   value="{{ $guru->nama }}" required>
                        </div>

                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control"
                                   value="{{ $guru->nip }}" required>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3">{{ $guru->alamat }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>No HP</label>
                            <input type="text" name="no_hp" class="form-control"
                                   value="{{ $guru->no_hp }}">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="{{ route('data-guru.index') }}" class="btn btn-light">Kembali</a>
                    </form>

                </div>
            </div>   
        </div>
    </div>    
</div>

@endsection