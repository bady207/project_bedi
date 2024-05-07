<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table border="1">

        <tr>
            <td>ID</td>
            <td>No Telepon</td>
            <td>pengguna ID</td>
        </tr>
        @foreach ($telepons as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->no_telepon}} </td>
            <td> {{$data->pengguna_id}} </td>

        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>