<!DOCTYPE html>
<html>

<head>
    <style>
        #tkonsumen {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: auto;
            overflow-x: auto
        }

        #tkonsumen td,
        #tkonsumen th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 16px;
        }

        #tkonsumen tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #tkonsumen tr:hover {
            background-color: #ddd;
        }

        #tkonsumen th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #696CFF;
            color: white;
            text-align: center;
        }

        #tkonsumen th:nth-child(7),
        #tkonsumen td:nth-child(7) {
            width: 120px;
        }
    </style>
</head>

<body>
    <h3 align="center">Data Transaksi Konsumen</h3>

    <table id="tkonsumen">
        <tr>
            <th>ID</th>
            <th>Konsumen</th>
            <th>Pegawai</th>
            <th>Layanan</th>
            <th>Barang</th>
            <th>Poin</th>
            <th>Jenis Transaksi</th>
            <th>Total Bayar</th>
            <th>Tanggal</th>
        </tr>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->konsumens->nama }}</td>
                <td>{{ $row->pegawais->nama }}</td>
                <td>{{ $row->layanans->jenis_layanan }}</td>
                <td>{{ $row->barangs->jenis }}</td>
                <td>{{ $row->penukarans->poins->poin }}</td>
                <td>{{ $row->jenis_transaksi }}</td>
                <td>{{ $row->total }}</td>
                <td>{{ $row->tanggal }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
