@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

              <div class="panel-heading">
              <h1>Edit/Delete a Review</h1>
              <br>
              <h2><i>{{ $review->review }}</h2></i>
              </div>

              <div class="panel-body">
               
                <a href="/profile/myReviews/{{ $review->id }}" id="edit">Edit</a>

                <div id="updateRev" style="display: none;">

					<form method="POST" action="/profile/myReviews/{{ $review->id }}/update">

						  {{ method_field('PATCH') }}

						  <div class="form-group">
							   <textarea name="body" class="form-control">{{ $review->review }}</textarea>
						  </div>
						  <div class="form-group">
						  	 <button type="submit" class="btn btn-primary">Update Review</button>
						  </div>
					</form>
				</div>

				<br>

				<a href="/profile/myReviews/{{ $review->id }}" id="delete">Delete</a>
                
                  <div id="deleteRev" style="display: none;">
                	<form method="POST" action="/profile/myReviews/{{ $review->id }}/delete">
                		{{ method_field('DELETE') }}
				    	<div class="form-group">
				    		<h3><b>Are you sure want to delete this review?</b></h3>
				    		<span class="glyphicon glyphicon-trash"></span>
						  	<button type="submit" class="btn">Delete Review</button>
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
    $("#edit").click(function () {
       $("#updateRev").show();  
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
