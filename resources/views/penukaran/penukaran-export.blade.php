<!DOCTYPE html>
<html>

<head>
    <style>
        #penukaran {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #penukaran td,
        #penukaran th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 16px;
        }

        #penukaran tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #penukaran tr:hover {
            background-color: #ddd;
        }

        #penukaran th {
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
    <h3 align="center">Data Penukaran Poin</h3>

    <table id="penukaran">
        <tr>
            <th>ID</th>
            <th>ID Poin</th>
        </tr>
        @foreach ($data as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->poins->poin }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
