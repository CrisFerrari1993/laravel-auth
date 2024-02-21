@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">

        <div class="card my-5">
            <div class="card-header">
                <h1>Project: "{{ $projects->title }}" EDIT </h1>
            </div>
            <div class="card-body">
                <form action="{{ route('projects.update', $projects -> id)}}"
                    method="POST">
                  @csrf
                  @method('PUT')
                  <div class="row">
                      <div class="col ">
                          <label for="title">Title</label>
                          <input type="text" name="title" value="{{$projects -> title}}">
                          <br>
                          @error('title')
                              <div class="alert alert-danger">
                                  {{$message}}
                              </div>
                          @enderror
                      </div>
                      <div class="col">
                          <label for="genre">IMG_Path</label>
                          <input type="text" name="IMG_path" value="{{$projects -> IMG_path}}">
                          <br>
                          @error('IMG_path')
                              <div class="alert alert-danger">
                                  {{$message}}
                              </div>
                          @enderror
                      </div>
                      <div class="col">
                          <label for="pubblication_year">Framework</label>
                          <input type="text" name="framework" value="{{$projects -> framework}}">
                          <br>
                          @error('pubblication_year')
                              <div class="alert alert-danger">
                                  {{$message}}
                              </div>
                          @enderror
                      </div>
                      <div class="col">
                          <label for="description">Description</label>
                          <input type="text" name="description" value="{{$projects -> description}}">
                          <br>
                          @error('description')
                              <div class="alert alert-danger">
                                  {{$message}}
                              </div>
                          @enderror
                      </div>
                  </div>
                  <input class="m-5" type="submit" value="Update">
              </form>
          </div>
          <button class="btn btn-primary"><a class="text-light" href="/">Back to Home</a></button>   
            </div>

            <div class="card-footer ">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary m-2"><a class="text-light" href="{{route('')}}"><i class="fa-solid fa-pen"></i></a></button>
                    </div>
                    <div class="col">
                        <form 
                        action="{{route('projects.destroy', $projects ->id)}}"
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