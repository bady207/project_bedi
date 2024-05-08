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
            <td>Nama Barang</td>
            <td>Harga Barang</td>
            <td>Qty</td>
        </tr>
        @foreach ($barang as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->nama_barang}} </td>
            <td> {{$data->harga_barang}} </td>
            <td> {{$data->qty}} </td>

        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>