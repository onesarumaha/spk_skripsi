@extends('layout.app')

@section('content')

<div class="content-wrapper">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Normalisasi SAW</h4>
                    <p class="card-description">
                        Hasil normalisasi nilai berdasarkan atribut Benefit / Cost
                    </p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">

                            <thead class="table-success">
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
                                                    ->value('nilai') ?? 0;

                                                if ($k->atribut == 'benefit') {

                                                    $max = App\Models\PenilaianModel::where('kriteria_id', $k->id)
                                                        ->max('nilai');

                                                    $hasil = $max > 0 ? $nilai / $max : 0;

                                                } else {

                                                    $min = App\Models\PenilaianModel::where('kriteria_id', $k->id)
                                                        ->min('nilai');

                                                    $hasil = $nilai > 0 ? $min / $nilai : 0;
                                                }
                                            @endphp

                                            <td class="text-center">
                                                {{ round($hasil, 3) }}
                                            </td>

                                        @endforeach

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ $kriteria->count() + 2 }}" class="text-center">
                                            Data belum tersedia
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