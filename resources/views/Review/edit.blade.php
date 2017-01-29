<!DOCTYPE html>
<html>
<head>
	<title>Edit A Review</title>
</head>
<body>
<center>Edit Your Review</center>

	Your Review:<br>
		
{!! Form::model($review, ['method' => 'PATCH','route' => ['Review.update', $review->id]]) !!}
	<input type="Text" name="review_text">
	<input type="submit" name='s'>
	
{!! Form::close() !!}


</body>
</html>