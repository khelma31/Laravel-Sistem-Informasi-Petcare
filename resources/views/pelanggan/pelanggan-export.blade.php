<!DOCTYPE html>
<html>

<head>
    <style>
        #pelanggan {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: auto;
            overflow-x: auto;
        }

        #pelanggan td,
        #pelanggan th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        #pelanggan tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #pelanggan tr:hover {
            background-color: #ddd;
        }

        #pelanggan th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #696CFF;
            color: white;
            text-align: center;
        }

        #pelanggan th:nth-child(7),
        /* Kolom "No. Telepon" */
        #pelanggan td:nth-child(7) {
            width: 120px;
            /* Ubah nilai width sesuai kebutuhan */
        }
    </style>
</head>

<body>
    <h3 align="center">Data Pelanggan</h3>

    <table id="pelanggan">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama Hewan</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
        </tr>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->pengguna->username }}</td>
                <td>{{ $row->hewan->nama }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->no_telpon }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
