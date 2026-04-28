@extends('layout.app')

@section('content')

<div class="content-wrapper">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Perangkingan SAW</h4>
                    <p class="card-description">
                        Hasil akhir perhitungan metode Simple Additive Weighting (SAW)
                    </p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">

                            <thead class="table-warning">
                                <tr>
                                    <th width="80">Ranking</th>
                                    <th>Nama Guru</th>
                                    <th width="180">Nilai Akhir</th>
                                    <th width="150">Status</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($hasil as $index => $row)
                                    <tr>

                                        <td class="text-center">
                                            {{ $index + 1 }}
                                        </td>

                                        <td>
                                            {{ $row['nama'] }}
                                        </td>

                                        <td class="text-center">
                                            {{ round($row['nilai'], 3) }}
                                        </td>

                                        <td class="text-center">

                                            @if($index == 0)
                                                <span class="badge badge-success">
                                                    Terbaik
                                                </span>
                                            @elseif($index == 1)
                                                <span class="badge badge-primary">
                                                    Unggul
                                                </span>
                                            @else
                                                <span class="badge badge-secondary">
                                                    Kandidat
                                                </span>
                                            @endif

                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            Data ranking belum tersedia
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