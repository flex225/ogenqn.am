<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Log in</h1>

<form method="POST" action="{{route('signin')}}">
	<input type="text" name="username">
	<input type="password" name="pasword">
	<input type="submit" name="login" value="login">
	{{csrf_field()}}
</form>

@if (count($errors) > 0)

    <div class="alert alert-danger" role="alert" style="margin-top:10px;margin-bottom: 5px;">
        <strong></strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

</body>
</html>