<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
</head>
<body>
	<form action="/insert" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<!-- <form> -->
	<input type="text" name="name" id="name" placeholder="Name"> <br>
	
<!-- </form> -->
	<input type="email" name="email" id="email" placeholder="Email"> <br>
	<input type="password" name="password" id="password" placeholder="Password"> <br>
	<input type="password" name="confirm_password" id="confirm_password" placeholder="Re-Type Password"> <br>
	<input type="file" name="upload"><br>
	<input type="radio" name="gender" value="male" id="male"> Male
	<input type="radio" name="gender" value="female" id="female"> Female <br>
	<input type="date" name="dob" id="dob"><br>
	<input type="textarea" name="address" id="address" placeholder="Address"><br>
	<input type="submit" name="register">
	@if(isset($errors))
		@foreach($errors->all() as $e)
			{{$e}}
			<br>
		@endforeach
	@endif

	@if(isset($newUsers))
		@foreach($newUsers as $u)
			{{$u->name}}
			<br>
		@endforeach
	@endif

</form>


</body>
</html>