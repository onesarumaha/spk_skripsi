@extends('layout.app')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Penilaian Guru</h4>

                    <form action="{{ route('penilaian.update', $penilaian->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- PILIH GURU --}}
                        <div class="form-group">
                            <label>Nama Guru</label>
                            <select name="guru_id" class="form-control" required>
                                <option value="">-- Pilih Guru --</option>

                                @foreach($guru as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $penilaian->guru_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- PILIH KRITERIA --}}
                        <div class="form-group">
                            <label>Kriteria</label>
                            <select name="kriteria_id" class="form-control" required>
                                <option value="">-- Pilih Kriteria --</option>

                                @foreach($kriteria as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $penilaian->kriteria_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- NILAI --}}
                        <div class="form-group">
                            <label>Nilai</label>
                            <input type="number"
                                   name="nilai"
                                   class="form-control"
                                   value="{{ $penilaian->nilai }}"
                                   placeholder="Masukkan Nilai"
                                   required>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">
                            Update
                        </button>

                        <a href="{{ route('penilaian') }}" class="btn btn-light">
                            Kembali
                        </a>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection