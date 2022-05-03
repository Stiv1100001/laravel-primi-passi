<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <header>
        <h1>
            Hello World to {{$name}}!
        </h1>
    </header>
    <main>
        <ul>
            <li><a href="{{ @route('welcome')}}">Welcome</a></li>
            <li><a href="{{ @route('about')}}">About</a></li>
        </ul>
    </main>
</body>

</html>
