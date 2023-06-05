<!DOCTYPE html>
<html>

<head>
    <style>
        #konsumen {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: auto;
            overflow-x: auto;
        }

        #konsumen td,
        #konsumen th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        #konsumen tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #konsumen tr:hover {
            background-color: #ddd;
        }

        #konsumen th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #696CFF;
            color: white;
            text-align: center;
        }

        #konsumen th:nth-child(7),
        /* Kolom "No. Telepon" */
        #konsumen td:nth-child(7) {
            width: 120px;
            /* Ubah nilai width sesuai kebutuhan */
        }
    </style>
</head>

<body>
    <h3 align="center">Data Konsumen</h3>

    <table id="konsumen">
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
