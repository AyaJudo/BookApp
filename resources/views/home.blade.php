@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="panel-body">
                <a href="/profile">View Your Profile</a>
                </div>
                <div class="panel-body">
                <a href="/search">Search For a Book</a>
                </div>
                <div class="panel-body">
                <a href="/books">View All Books</a>
                </div>

                <div class="panel-body">
                <a href="/home/TopBooks" id="topRated">Top Rated Books</a>
              </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
