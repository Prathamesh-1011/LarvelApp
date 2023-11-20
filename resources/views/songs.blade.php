<!DOCTYPE html>
<html>
<head>
    <title>Songs Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <h1>Songs</h1>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Artist</th>
        </tr>
        @foreach ($songs as $song)
        <tr>
            <td>{{ $song->getTitle() }}</td>
            <td>{{ $song->getArtist() }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html> 
