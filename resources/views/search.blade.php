@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

              <div class="panel-heading">
              <h1>Search for a Book by Name</h1>
              <br>
              </div>

              <div class="panel-body">
      					<form method="POST" action="/search/result">

      						  {{ method_field('POST') }}

      						  <div class="form-group">
                       <h2>Enter the Name of the Book</h2>
      							   <textarea name="body" class="form-control"></textarea>
      						  </div>
      						  <div class="form-group">
      						  	 <button type="submit" class="btn btn-primary">Search</button>
      						  </div>
      					</form>
      				</div>
               
          </div>
          	
        </div>
    </div>
</div>

@endsection
