<!DOCTYPE html>
<html>

<head>
    <style>
        #saran {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #saran td,
        #saran th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 16px;
        }

        #saran tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #saran tr:hover {
            background-color: #ddd;
        }

        #saran th {
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
    <h3 align="center">Data Saran & Kritik</h3>

    <table id="saran">
        <tr>
            <th>ID</th>
            <th>ID Username</th>
            <th>Nama Pengirim</th>
            <th>Email Pengirim</th>
            <th>Pesan</th>
        </tr>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->penggunas->username }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->pesan }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
