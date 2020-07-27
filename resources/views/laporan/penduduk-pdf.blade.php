<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Laporan Data Penduduk</title>
    <style type="text/css">
		body{
			font-family: sans-serif;
		}
        table {
            font-family: Arial, Helvetica, sans-serif;
            color: #666;
            text-shadow: 1px 1px 0px #fff;
            background: #eaebec;
            border: #ccc 1px solid;
            font-size: 10px;
            width: 730px;
        }
        
        table th {
            padding: 10px 20px;
            border-left:1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            background: #ededed;
        }
        
        table th:first-child{  
            border-left:none;  
        }
        
        table tr {
            text-align: center;
            padding-left: 10px;
        }
        
        table td:first-child {
            text-align: left;
            padding-left: 10px;
            border-left: 0;
        }
        
        table td {
            padding: 10px 20px;
            border-top: 1px solid #ffffff;
            border-bottom: 1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;
            background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
        }
        table tr:last-child td {
            border-bottom: 0;
        }
        
        table tr:last-child td:first-child {
            -moz-border-radius-bottomleft: 3px;
            -webkit-border-bottom-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }
        
        table tr:last-child td:last-child {
            -moz-border-radius-bottomright: 3px;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }
        
        table tr:hover td {
            background: #f2f2f2;
            background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
            background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
        }
        .badge-warning{
            background-color: #ffc107;
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            color: #212529;
        }
        .badge-success{ 
            background-color: #28a745;
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            color: #fff;
        }
	</style>
</head>
<body>

    <h1 style="text-align:center; margin-top:50px;">Laporan Data Penduduk</h1>
    </div>
            <table style="margin-top: 50px;">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat,Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>Pendidikan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_penduduk as $penduduk)
                        <tr>
                            <td>{{ $penduduk->nik }}</td>
                            <td>{{ $penduduk->nama }}</td>
                            <td>{{ $penduduk->tempat_lahir }},{{ date('d-m-yy',strtotime($penduduk->tanggal_lahir))}}</td>
                            <td>{{ $penduduk->agama['nama_agama'] }}</td>
                            <td>{{ $penduduk->jenis_kelamin }}</td>
                            <td>{{ $penduduk->pekerjaan }}</td>
                            <td>{{ $penduduk->pendidikan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
</html>