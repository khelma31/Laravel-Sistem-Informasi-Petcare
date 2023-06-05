<!DOCTYPE html>
<html>

<head>
    <style>
        #layanan {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #layanan td,
        #layanan th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #layanan tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #layanan tr:hover {
            background-color: #ddd;
        }

        #layanan th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #696CFF;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3 align="center">Data Layanan</h3>

    <table id="layanan">
        <tr>
            <th>ID</th>
            <th>Jenis</th>
            <th>Harga</th>
        </tr>
        @foreach ($data as $l)
            <tr>
                <td>{{ $l->id }}</td>
                <td>{{ $l->jenis_layanan }}</td>
                <td>{{ $l->harga }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
