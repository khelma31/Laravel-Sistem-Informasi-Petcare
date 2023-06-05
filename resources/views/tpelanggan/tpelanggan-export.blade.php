<!DOCTYPE html>
<html>

<head>
    <style>
        #tpelanggan {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: auto;
            overflow-x: auto
        }

        #tpelanggan td,
        #tpelanggan th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 16px;
        }

        #tpelanggan tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #tpelanggan tr:hover {
            background-color: #ddd;
        }

        #tpelanggan th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #696CFF;
            color: white;
            text-align: center;
        }

        #tpelanggan th:nth-child(7),
        #tpelanggan td:nth-child(7) {
            width: 120px;
        }
    </style>
</head>

<body>
    <h3 align="center">Data Transaksi Pelanggan</h3>

    <table id="tpelanggan">
        <tr>
            <th>ID</th>
            <th>Pelanggan</th>
            <th>Pegawai</th>
            <th>Layanan</th>
            <th>Barang</th>
            <th>Jenis Transaksi</th>
            <th>Total Bayar</th>
            <th>Tanggal</th>
        </tr>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->pelanggans->nama }}</td>
                <td>{{ $row->pegawais->nama }}</td>
                <td>{{ $row->layanans->jenis_layanan }}</td>
                <td>{{ $row->barangs->jenis }}</td>
                <td>{{ $row->jenis_transaksi }}</td>
                <td>{{ $row->total }}</td>
                <td>{{ $row->tanggal }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
