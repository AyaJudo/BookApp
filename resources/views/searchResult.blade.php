@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

              <div class="panel-heading">
              <h1>Search Result</h1>
              <br>
              </div>

                
              <div class="panel-body">
                  @if(count($books))
		    		      @foreach($books as $book)
                   <ul>
                    <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
                    <br>
                    </ul>
                   @endforeach
                  @else
                  <h1>Sorry! There is no book with this name!</h1>
                  <a href="/search">Search Again</a>
                  @endif
		          </div>
               
                
          </div>
          	
        </div>
    </div>
</div>

@endsection