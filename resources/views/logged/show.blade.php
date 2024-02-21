@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">

        <div class="card my-5">
            <div class="card-header">
                <h1> {{ $project->title }} </h1>
            </div>

            <div class="card-body">
                <img style="max-width: 100%" src="{{$project ->IMG_path}}" alt="{{$project ->title}}">
                <h4>Description:</h4>
                <p>{{ $project->description }}</p>
            </div>

            <div class="card-footer ">
                <div class="row">
                    <div class="col">
                        <b>Framework: </b>
                        {{ $project->framework }}
                    </div>
                    <div class="col">
                        <b>Created: </b>
                        {{ $project->created_at }}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary m-2"><a class="text-light" href=""><i class="fa-solid fa-pen"></i></a></button>
                    </div>
                    <div class="col">
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

        </div>

    </div>
@endsection
