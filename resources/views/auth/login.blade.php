<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<h1>Login</h1>
<div class='container'>

<form method="post" action="{{route('login-user')}}" >
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
        @endif

        @if(Session::has('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
    </div>
        @endif
        
        {{ csrf_field()}}
        <div class='form-group '>
            <label for="email">Enter Email</label>
            <input id='email' type="email" name='email'  class='form-control' value="{{old('email')}}" />
            <span class="text-danger">@error('email') {{$message}} @enderror </span>

        </div>

        <div class='form-group'>
            <label for="password">Enter Passwor</label>
            <input id='password' type="password" name='password'  class='form-control' />
            <span class="text-danger">@error('password') {{$message}} @enderror </span>

        </div>
    
        <div class='form-group '>
            <input type="submit" name='submit' class='form-control' class='btn btn-primary' value='Login'>
        </div>


    </form>
    <a href="register"> New user ? Register</a>

    </div>



















<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>