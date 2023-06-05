<!DOCTYPE html>
<html>

<head>
    <style>
        #poin {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #poin td,
        #poin th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 16px;
        }

        #poin tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #poin tr:hover {
            background-color: #ddd;
        }

        #poin th {
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
    <h3 align="center">Data Poin</h3>

    <table id="poin">
        <tr>
            <th>ID</th>
            <th>Poin</th>
        </tr>
        @foreach ($data as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->poin }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
