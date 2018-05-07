<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>My Tasks</h1>

        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->body }}</li>
            @endforeach
        </body>
        </ul>

</html>
