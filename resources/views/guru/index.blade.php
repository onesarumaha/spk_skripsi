@extends('layout.app')

@section('content')

     <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <a href="{{ route('data-guru.create') }}" class="btn btn-primary mb-3">
                        + Tambah Guru
                    </a>
                  <h4 class="card-title">Data Guru</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>NIP</th>
                          <th>Alamat </th>
                          <th>No HP</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $index => $guru)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $guru->nama }}</td>
                            <td>{{ $guru->nip }}</td>
                            <td>{{ $guru->alamat }}</td>
                            <td>{{ $guru->no_hp }}</td>
                            <td>
                                <a href="{{ route('data-guru.edit', $guru->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('data-guru.destroy', $guru->id) }}" method="POST" style="display:inline;">
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