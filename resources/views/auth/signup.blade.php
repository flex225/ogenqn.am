signup

<form method="POST" action="{{route('signup')}}">
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="password" name="password_confirmation">
	<input type="submit" name="Register" value="Register">
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