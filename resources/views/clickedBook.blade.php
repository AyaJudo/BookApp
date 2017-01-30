@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

              <div class="panel-heading">
              <h1>View/Review a Book</h1>
              <br>
              <h2><i>{{ $book->title }}</h2></i>
              </div>

              <div class="panel-body">
               
                <h3>Author: {{ $book->author }}</h3>
                <h3>Description: {{ $book->description }}</h3>
                <h3>Genre: {{ $book->genre }}</h3>
                <h3>Publish Date: {{ $book->publish_date }}</h3>
                <h3>Average Rating: {{ $book->average_rating }}</h3>
                <h3>Reviews:</h3><br>
                @foreach($reviews as $review)
                 <ul>
                 <body>{{ $review->review }}</body>
                  <br>
                  </ul>
                 @endforeach


          			<br>

          			<a href="/books/{{$book->id}}" id="viewDiv">Click Here To Review This Book</a><br></br>

                 <div id="review" style="display: none;">

                  <form method="POST" action="/books/{{$book->id}}/review">

                      {{ method_field('POST') }}

                      <div class="form-group">
                         <textarea name="body" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary">Submit Review</button>
                      </div>
                  </form>
                 </div>
                
               
              </div>
                
          </div>
          	
        </div>
    </div>
</div>

@endsection

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $("#viewDiv").click(function () {
       $("#review").show();  
       return false;           
    });
  });
  $(document).ready(function () {
    $("#delete").click(function () {
       $("#deleteRev").show();  
       return false;           
    });
  });
 </script>