<!DOCTYPE html>
<html>

<head>
    <style>
        #pengguna {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #pengguna td,
        #pengguna th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 16px;
        }

        #pengguna tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #pengguna tr:hover {
            background-color: #ddd;
        }

        #pengguna th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #696CFF;
            color: white;
            text-align: center;
        }

        /* #pengguna th:nth-child(7),
        #pengguna td:nth-child(7) {
            width: 120px;
        } */
    </style>
</head>

<body>
    <h3 align="center">Data Pengguna</h3>

    <table id="pengguna">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        @foreach ($data as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->username }}</td>
                <td>{{ $p->password }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
