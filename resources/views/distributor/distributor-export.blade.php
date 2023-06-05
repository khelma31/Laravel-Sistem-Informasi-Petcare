<!DOCTYPE html>
<html>

<head>
    <style>
        #distributors {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #distributors td,
        #distributors th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #distributors tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #distributors tr:hover {
            background-color: #ddd;
        }

        #distributors th {
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
    <h3 align="center">Data Distributor</h3>

    <table id="distributors">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->alamat }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
