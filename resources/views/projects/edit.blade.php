@extends('layout')

@section('content')

<h1 class="title">Edit Project</h1>

<form method="POST" action="/projects/{{$project-> id}}">

    {{-- {{ method_field('PATCH') }}

    {{ csrf_field() }} --}}

    @method('PATCH')

    @csrf

    <div class="field">
        <label for="title" class="label">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" placeholder="title" value=" {{$project->title}}">
        </div>
    </div>

    <div class="field">
        <label for="" class="label">Description</label>

        <div class="control">
            <textarea name="description" class="textarea">{{$project->description}}</textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
        </div>
    </div>

</form>

<form method="POST" action="/projects/{{ $project-> id }}">
    {{-- {{method_field('DELETE')}}

    {{csrf_field()}} --}}

    @method('DELETE')

    @csrf

    <div class="field">
        <div class="control">
                <button type="submit" class="button">dELETE Project</button>
        </div>
    </div>





</form>

@endsection
