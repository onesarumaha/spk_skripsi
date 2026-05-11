<!-- resources/views/laporan/pdf.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Ranking Guru Terbaik</title>

    <style>
        body{
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        .judul{
            text-align: center;
            margin-bottom: 20px;
        }

        .judul h2,
        .judul h3,
        .judul p{
            margin: 2px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td{
            border: 1px solid #000;
        }

        th, td{
            padding: 6px;
            text-align: center;
        }

        th{
            background: #f2f2f2;
        }

        .left{
            text-align: left;
        }

        .ttd{
            margin-top: 60px;
            width: 100%;
        }

        .kanan{
            text-align: right;
            border: none;
        }
    </style>
</head>
<body>

    <div class="judul">
        <h2>LAPORAN HASIL PENILAIAN</h2>
        <h3>RANKING GURU TERBAIK</h3>
        <p>Metode SAW (Simple Additive Weighting)</p>
    </div>

    <hr>

    <table>
        <tr>
            <th width="40%" class="left">Tanggal Cetak</th>
            <td class="left">{{ date('d-m-Y') }}</td>
        </tr>
        <tr>
            <th class="left">Total Guru</th>
            <td class="left">{{ $guru }}</td>
        </tr>
    </table>

    <br>

    <table>
        <thead>
            <tr>
                <th width="8%">No</th>
                <th>Nama Guru</th>
                <th width="20%">Nilai Akhir</th>
                <th width="15%">Ranking</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ranking as $key => $row)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td class="left">{{ $row->guru->nama ?? '-' }}</td>
                <td>{{ number_format($row->nilai_akhir, 2) }}</td>
                <td>{{ $key + 1 }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br><br>

    <table class="ttd">
        <tr>
            <td class="kanan">
                Mengetahui,<br>
                Kepala Sekolah
                <br><br><br><br>
                ______________________
            </td>
        </tr>
    </table>

</body>
</html>