<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Laporan Kartu Keluarga</title>
</head>
<body>
    <h1 class="text-center">Laporan Kartu Keluarga</h1>
    <div class="table-responsive">
        <table class="table table-striped" style="margin-top: 50px;">
            <thead>
                <tr>
                    <th>No KK</th>
                    <th>Kepala Keluarga</th>
                    <th>RT/RW</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_kk as $kk)
                    <tr>
                        <td>{{ $kk->no_kk }}</td>
                        <td>{{ $kk->kepala_keluarga }}</td>
                        <td>{{ $kk->rt }}/{{ $kk->rw }}</td>
                        <td>{{ $kk->desa }}</td>
                        <td>{{ $kk->kecamatan }}</td>
                        <td>{{ $kk->kabupaten }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>