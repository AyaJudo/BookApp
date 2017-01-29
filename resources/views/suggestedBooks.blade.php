@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

              <div class="panel-heading">
              <h1>Suggested Books</h1>
              </div>

              <div class="panel-body">
              <table style="font-size: 20px; text-align: center;" border="5">
              <tr>
               <th style="text-align: center;"> Book Title </th>  <th style="text-align: center;"> Author </th>  <th> Rating  </th>  <th style="text-align: center;"> Description  </th>  <th style="text-align: center;"> Publish Date </th> <th style="text-align: center;"> Genre </th>
                </tr>
               @foreach($books as $book)
               <ul>
              <tr>
               <td>{{ $book->title }}</td>   <td> {{ $book->author }} </td>   <td> {{ $book->average_rating }} </td>  <td> {{ $book->description }} </td>   <td> {{ $book->publish_date }} </td> <td> {{ $book->genre }} </td>
              </tr>
               
               </ul>
               @endforeach
               </table>
              </div>
          </div>
            
        </div>
    </div>
</div>


@endsection