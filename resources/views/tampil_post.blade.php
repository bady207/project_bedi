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
            <td>Id</td>
            <td>Title</td>
            <td>Content</td>
        </tr>
        @foreach ($posts as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->title}} </td>
            <td> {{$data->content}} </td>
        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>