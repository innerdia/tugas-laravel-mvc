@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit new posts {{$posts->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/posts/{{$posts->id}}" method="post">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title',$posts->title)}}" placeholder="Enter title" required>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
              </div>
                  <div class="form-group">
                    <label for="body">body</label>
                    <input type="text" class="form-control" id="body" name="body" value="{{old('body',$posts->body)}}" placeholder="body" required>
                    @error('body')
                        < div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">create</button>
                </div>
              </form>
            </div>
            </div>
@endsection