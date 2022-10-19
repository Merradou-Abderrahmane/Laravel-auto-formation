<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSRF</title>
</head>
<body>
    <form action="POST">
        {{-- For convenience we simply use @csrf --}}
        @csrf
        {{-- Or we type the following in a hidden input --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>