<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post method</title>
</head>
<body>
    <form action="post" method="POST">
        @csrf
        Name<input name="name" type="text">
        <button>click</button>
    </form>
</body>
</html>