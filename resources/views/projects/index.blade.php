<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tuts</title>
</head>
<body>
    <h1>projects</h1>

    <ul>

        @foreach ($projects as $project)
            <li>

                <a href="/projects/{{ $project->id }}">

                        {{$project -> title}}
                </a>

            </li>
            {{-- <li>{{$project-> description}}</li> --}}
        @endforeach

    </ul>
</body>
</html>
