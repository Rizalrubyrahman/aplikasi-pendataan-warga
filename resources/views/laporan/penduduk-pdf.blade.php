<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Laporan Penduduk</title>
</head>
<body>
    <h1 class="text-center">Laporan Penduduk</h1>
    <div class="table-responsive">
        <table class="table table-striped" style="margin-top: 50px;">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat,Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <td>Pendidikan</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_penduduk as $penduduk)
                    <tr>
                        <td>{{ $penduduk->nik }}</td>
                        <td>{{ $penduduk->nama }}</td>
                        <td>{{ $penduduk->tempat_lahir }},{{ date('d-m-yy',strtotime($penduduk->tanggal_lahir))}}</td>
                        <th>{{ $penduduk->agama['nama_agama'] }}</th>
                        <th>{{ $penduduk->jenis_kelamin }}</th>
                        <td>{{ $penduduk->pekerjaan }}</td>
                        <td>{{ $penduduk->pendidikan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>