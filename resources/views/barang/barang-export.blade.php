<!DOCTYPE html>
<html>

<head>
    <style>
        #barang {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #barang td,
        #barang th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #barang tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #barang tr:hover {
            background-color: #ddd;
        }

        #barang th {
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
    <h3 align="center">Data Barang</h3>

    <table id="barang">
        <tr>
            <th>ID</th>
            <th>Distributor</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jenis</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->distributors->nama }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->harga }}</td>
                <td>{{ $d->jenis }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
