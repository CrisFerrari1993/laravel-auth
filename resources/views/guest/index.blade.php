@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">

        <h1>Projects list</h1>

        <div class="container d-flex justify-content-center my-5">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-sm-12 col-md-12 col-xl-4">
                        <a href="">
                            <div class="container">
                                <img style="max-width: 100%" src="{{$project->IMG_path}}" alt="{{$project->title}}">
                                <h2 class="text-center">{{$project->title}}</h2>
                                <span>Framework: {{$project->framework}}</span>
                                <p class="my-3">Description: {{$project->description}}</p>
                            </div>
                        </a>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-primary m-2"><a class="text-light" href="{{route('projects.edit', $project->id)}}"><i class="fa-solid fa-pen"></i></a></button>
                                <form 
                                action="{{route('projects.destroy', $project ->id)}}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                    <input class="btn btn-danger m-2" onclick="return confirm('Confermare?')" type="submit" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
