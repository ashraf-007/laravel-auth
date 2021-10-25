<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <style>
    h1{
        text-align:center;
    }
    .container{
        margin-top:50px;
        padding:30px;
        width:500px;
        box-shadow:1px 3px 5px 0px gray;
    }
    .btn{
        margin-bottom:10px;
    }

    </style>
</head>
<body>
    
<div class='container'>
<h1>Login</h1>

<form method="post" action="{{route('login-user')}}" >
@csrf

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
        
        <div class='form-group '>
            <label for="email">Email</label>
            <input id='email' type="email" name='email'  class='form-control' value="{{old('email')}}" />
            <span class="text-danger">@error('email') {{$message}} @enderror </span>

        </div>

        <div class='form-group'>
            <label for="password">Password</label>
            <input id='password' type="password" name='password'  class='form-control' />
            <span class="text-danger">@error('password') {{$message}} @enderror </span>

        </div>
    
            <button type="submit" name='submit' class='btn btn-primary' value='Login' > Login </button>


    </form>
      
      <span>Don't have an account ? <a href="register">Register here</a> </span>

    </div>



















<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>