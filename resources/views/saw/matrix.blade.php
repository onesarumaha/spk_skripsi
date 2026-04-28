@extends('layout.app')

@section('content')

<div class="content-wrapper">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Matriks Keputusan</h4>
                    <p class="card-description">
                        Data nilai setiap guru berdasarkan masing-masing kriteria
                    </p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">

                            <thead class="table-primary">
                                <tr>
                                    <th width="60">No</th>
                                    <th>Nama Guru</th>

                                    @foreach($kriteria as $k)
                                        <th class="text-center">
                                            {{ $k->nama }}
                                        </th>
                                    @endforeach

                                </tr>
                            </thead>

                            <tbody>

                                @forelse($guru as $index => $g)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $g->nama }}</td>

                                        @foreach($kriteria as $k)

                                            @php
                                                $nilai = App\Models\PenilaianModel::where('guru_id', $g->id)
                                                    ->where('kriteria_id', $k->id)
                                                    ->value('nilai');
                                            @endphp

                                            <td class="text-center">
                                                {{ $nilai ?? 0 }}
                                            </td>

                                        @endforeach

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ $kriteria->count() + 2 }}" class="text-center">
                                            Data guru belum tersedia
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection