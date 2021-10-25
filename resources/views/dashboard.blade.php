<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body{
        margin:0 auto ;
        width:100%;
        text-align:center;
    }
    .container{

        margin-top:50px;
        padding:30px;
        width:500px;
        box-shadow:-1px 5px 14px -7px #545454;
        border:3px solid gray;
        border-radius:10px;
    }
    h2{
        color:#545454;
    }
</style>
<body>
            <div class="container">

        <h1>Welcome to your dashboard</h1>
        <h2>{{$data -> name}}</h2>

      <a class='btn btn-danger' href='logout'>Log Out</a>
      </div>







      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>