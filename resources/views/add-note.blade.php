<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    add note to page {{$page->content}}
    <form action="/pages/{{$page->id}}/notes" method="post">
        @csrf
        <input type="text" name="note">
        <button type="submit">submit</button>
    </form>
</body>
</html>