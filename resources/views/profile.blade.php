<!DOCTYPE html>
<html>
<head>
	<title>Your Home Page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/home_style.css')}}">
</head>
<body>
<div id="logout">
<a href="logout" style='position: relative; left: 1200px; top:20px; '>Logout</a>
</div>


<div id="basic_info" width="200px" >
<h1>Basic Info</h1>
<h2> 
<figure> Name: {{$user->name}}</figure>
<figure> E-mail: {{$user->email}}</figure>
<figure>Age: {{$user->age}}</figure>
<figure>Gender: {{$user->gender}}</figure>
<a href="/profile/" id="updateGenres">Edit Your Prefered Genres</a><br></br>
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
<br></br>
<a href="/profile/myReviews" id="updateGenres">View Your Reviews</a>
</h2>
</div>

</body>
</html>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $("#updateGenres").click(function () {
       $("#update").show();  
       return false;           
    });
  });
 </script>
