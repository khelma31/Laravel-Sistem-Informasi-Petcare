<!DOCTYPE html>
<html>

<head>
    <style>
        #pegawai {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #pegawai td,
        #pegawai th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 12px;
        }

        #pegawai tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #pegawai tr:hover {
            background-color: #ddd;
        }

        #pegawai th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #696CFF;
            color: white;
            font-size: 16px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3 align="center">Data Pegawai</h3>

    <table id="pegawai">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
        </tr>
        @foreach ($data as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->no_telpon }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
