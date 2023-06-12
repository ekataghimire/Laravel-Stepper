<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
</head>
<body class="d-flex justify-content-center p-4 pt-4">
    <div class="card">
        <div class="card-header bg-success text-white">Registration Complete</div>
        <div class="card-body">
            hello <b>{{request()->name }}</b>, thank you for joining us, soon we will approve your registration. <br>
            when your account will be approved, you will receive your credentials on <b>{{request()-> email}}</b> <br>
            Thank you <br><br>
            <a href="/" class="btn btn-sm btn-primary">Back to Home Page</a>
        </div>
    </div>  
</body>
</html>