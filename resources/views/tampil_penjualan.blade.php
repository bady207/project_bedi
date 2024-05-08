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
            <td>Nama Pelanggan</td>
            <td>Sub Total</td>
            <td>Diskon</td>
            <td>Grand Total</td>
        </tr>
        @foreach ($penjualans as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->nama_pelanggan}} </td>
            <td> {{$data->sub_total}} </td>
            <td> {{$data->diskon}} </td>
            <td> {{$data->grand_total}} </td>

        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>