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
            <td>ID Penjualan</td>
            <td>ID Barang</td>
            <td>Jumlah</td>
            <td>Total Harga</td>
        </tr>
        @foreach ($detail_penjualan as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->penjualan_id}} </td>
            <td> {{$data->barang_id}} </td>
            <td> {{$data->jumlah}} </td>
            <td> {{$data->total_harga}} </td>

        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>