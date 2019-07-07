@extends('layout')

@section('content')


    <h1>Create a new project</h1>

    <form method="POST" action="/projects">
        {{csrf_field()}}
        <div class="field">
            <div class="control">
                    <input type="text" name = "title" placeholder="Project title"   class="input {{$errors-> has('title') ? 'is-danger': ''}} " value={{old('title')}}>

            </div>
        </div>
        <div>
            <textarea type="text" name ="description" placeholder="Project description"  class="textarea {{$errors->has('description') ? 'is-danger' : ''}}">
                    {{old('description')}}
            </textarea>
        </div>
        <div>
            <button  class="button is-link"   type="submit" >Create Project</button>
        </div>

        @if ($errors->any()) <!-- errors is an object consists of helper methods -->
        <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)  <!--   using for each we displaying error  --->
                    <li> {{$error}}</li>
                    @endforeach
                </ul>
        </div>
        @endif
    </form>


@endsection
