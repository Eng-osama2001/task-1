<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <ul>

        {{-- {{-- @foreach($tasks as $task)
        <li> <a href="{{'task/show/' .$task}}"> <h3>{{$task}}</h3> </a> </li>
        @endforeach --}}
        {{--
        @for($i=0; $i < count($tasks); $i++)
        <li> <a href="{{'task/show'    $i}}"> <h3>{{$tasks[$i]}}</h3> </a> </li>
        </ul> --}}

        @foreach ($tasks as $task)
            <li><a href="tasks/show/{{$task->id}}">{{$task->title}}</a></li>
        @endforeach

</body>
</html>
