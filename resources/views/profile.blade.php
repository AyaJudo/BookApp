@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">Profile</div>
              <div class="panel-body">
                <a href="/profile/" id="updateGenres">Edit Your Prefered Genres</a>
                <div id="update" style="display: none;">

                  <form method="POST" action="/profile/updateGenres">

          				  {{ method_field('PATCH') }}

          				  <div class="form-group">
          					   <textarea name="body" class="form-control">{{ $user->prefered_genre }}</textarea>
          				  </div>
          				  <div class="form-group">
          				  	 <button type="submit" class="btn btn-primary">Update Prefered Genres</button>
          				  </div>
          				</form>
                </div>
              </div>

              <div class="panel-body">
                <a href="/profile/myReviews" id="updateGenres">View Your Reviews</a>
              </div>

              <div class="panel-body">
                <a href="/profile/SuggestedBooks" id="SuggestedBooks">View Suggested Books based on your preferred genre</a>
              </div>

               
          </div>
        </div>
    </div>
</div>
@endsection


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $("#updateGenres").click(function () {
       $("#update").show();  
       return false;           
    });
  });
 </script>