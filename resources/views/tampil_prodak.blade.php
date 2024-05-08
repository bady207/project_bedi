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
            <td>Nama Produk</td>
            <td>jumlah</td>
            <td>Id merek</td>
        </tr>
        @foreach ($prodaks as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->nama_prodak}} </td>
            <td> {{$data->jumlah}} </td>
            <td> {{$data->merek_id}} </td>

        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>