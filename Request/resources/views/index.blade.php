<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FRUITS</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>color</td>
        </tr>
        @foreach ($fruits as $fruit)
            <tr>
                <td>{{ $fruit->id }}</td>
                <td>{{ $fruit->name }}</td>
                <td>{{ $fruit->color }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>