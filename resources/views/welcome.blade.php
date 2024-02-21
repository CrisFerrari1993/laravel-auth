@extends('layouts.app')
@section('content')
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
            </div>
        @endforeach
    </div>
</div>

@endsection