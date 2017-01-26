@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

              <div class="panel-heading">
              <h1>My Reviews</h1>
              </div>

              <div class="panel-body">
               @foreach($reviews as $review)
               <ul>
               <h3></h3>
                <a href="/profile/myReviews/{{ $review->id }}">{{ $review->review }}</a>
                <br>
                </ul>
               @endforeach
              </div>
                
          </div>
          	
        </div>
    </div>
</div>


@endsection