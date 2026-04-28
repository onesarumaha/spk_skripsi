@extends('layout.app')

@section('content')

     <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <a href="{{ route('penilaian.create') }}" class="btn btn-primary mb-3">
                        + Penilaian
                    </a>
                  <h4 class="card-title">Penilaian Guru</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Guru</th>
                          <th>Kriteria</th>
                          <th>Nilai </th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $index => $penilaian)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $penilaian->guru->nama ?? '-' }}</td>
                            <td>{{ $penilaian->kriteria->nama ?? '-' }}</td>
                            <td>{{ $penilaian->nilai }}</td>
                            <td>
                                <a href="{{ route('penilaian.edit', $penilaian->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('penilaian.destroy', $penilaian->id) }}" method="POST" style="display:inline;">
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