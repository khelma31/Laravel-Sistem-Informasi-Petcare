<!DOCTYPE html>
<html>

<head>
    <style>
        #hewan {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #hewan td,
        #hewan th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #hewan tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #hewan tr:hover {
            background-color: #ddd;
        }

        #hewan th {
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
    <h3 align="center">Data Hewan</h3>

    <table id="hewan">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Jenis Kelamin</th>
        </tr>
        @foreach ($data as $h)
            <tr>
                <td>{{ $h->id }}</td>
                <td>{{ $h->nama }}</td>
                <td>{{ $h->jenis_hewan }}</td>
                <td>{{ $h->jenis_kelamin }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
