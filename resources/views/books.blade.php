@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>All Available Books</h1></div>

                <div class="panel-body">
	               @foreach($books as $book)
	               <ul>
	               <h3></h3>
	                <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
	                <br>
	                </ul>
	               @endforeach
	            </div>
               
            </div>
        </div>
    </div>
</div>

@endsection