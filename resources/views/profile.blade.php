<!DOCTYPE html>
<html>
<head>
	<title>Your Home Page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/home_style.css')}}">
</head>
<body>
<div id="logout">
<a href="logout" style='position: relative; left: 1400px; top:100px; '>Logout</a>
</div>


<div id="basic_info" width="200px" >
<h1>Basic Info</h1>
<h2> 
<figure class="box"> name </figure><strong> {{$name}} </strong><br>
<figure class="box"> e-mail</figure> {{$email}} <br>
<figure class="box">age </figure>{{$age}}<br>
<figure class="box">gender</figure> {{$gender}}<br>
</h2>
</div>

<div id = "reviews">
<H2>Your Reviews</H2>
<h3>
<ul>
	@foreach($result as $review)
	<li><p>{{$review->created_at}} on ' {{$review->book->title}} '  </p>
		
	<p>{{$review->review}}   
        		 <a class="btn btn-small btn-success" href="{{ URL::to('Review/' . $review->id.'/edit') }}" >edit this review</a>        		
        		 {!! Form::open(['method' => 'DELETE','route' => ['Review.destroy', $review->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
                </p>
	</li>
	@endforeach	
</ul>
</h3>
</div>

</body>
</html>