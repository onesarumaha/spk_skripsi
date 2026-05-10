@extends('layout.app')

@section('content')

     <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <a href="{{ route('kriteria.create') }}" class="btn btn-primary mb-3">
                        + Tambah Kriteria
                    </a>
                  <h4 class="card-title">Data Kriteria</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Nama (Alternatif)</th>
                          <th>Bobot </th>
                          <th>Tipe</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $index => $kriteria)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $kriteria->kode }}</td>
                            <td>{{ $kriteria->nama }}</td>
                            <td>{{ $kriteria->bobot }}</td>
                            <td>{{ $kriteria->tipe }}</td>
                            <td>
                                <a href="{{ route('kriteria.edit', $kriteria->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('kriteria.destroy', $kriteria->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">
                                        Hapus
                                    </button>
                                </form>
                        
                            </td>
                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection