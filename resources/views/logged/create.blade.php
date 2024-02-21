@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">

        <div class="card my-5">
            <div class="card-header">
                <h1>Create a new project</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('projects.store')}}"
                    method="POST">
                  @csrf
                  @method('POST')
                  <div class="row">
                      <div class="col-sm-12 col-md-4">
                          <label for="title">Title</label>
                          <input type="text" name="title" placeholder="Insert title">
                          <br>
                          @error('title')
                              <div class="alert alert-danger">
                                  {{$message}}
                              </div>
                          @enderror
                      </div>
                      <div class="col-sm-12 col-md-4">
                          <label for="genre">IMG_Path</label>
                          <input type="text" name="IMG_path" placeholder="Insert img url">
                          <br>
                          @error('IMG_path')
                              <div class="alert alert-danger">
                                  {{$message}}
                              </div>
                          @enderror
                      </div>
                      <div class="col-sm-12 col-md-4">
                          <label for="pubblication_year">Framework</label>
                          <input type="text" name="framework" placeholder="Insert a framework">
                          <br>
                          @error('pubblication_year')
                              <div class="alert alert-danger">
                                  {{$message}}
                              </div>
                          @enderror
                      </div>
                      <div class="col-sm-12 col-md-4">
                          <label for="description">Description</label>
                          <input type="text" name="description" placeholder="Write the project description">
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

    </div>
@endsection