@extends('master')
@section('main')

    <div class="jumbotron">
      <h1 class="display-3">Create a Car</h1>
      <p class="lead">Car details</p>

      <form class="input-car" action="/car/create" method="post" enctype="multipart/form-data">
         
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            <input type="text" class="form-control" placeholder="year" name="year">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-car"></i></span>
            <input type="text" class="form-control" placeholder="make" name="make">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-car"></i></span>
            <input type="text" class="form-control" placeholder="model" name="model">
          </div>
          <input type="button" name="photo-add" value="add a photo" class="btn btn-success" onclick="window.location='{{ url("/photo-upload") }}'">
          <input type="submit" name="" value="Save" class="btn btn-primary">

      </form>

    </div>


@endsection
