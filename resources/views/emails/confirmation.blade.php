<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation Email</title>
</head>
<body>
    <h1> Thanks for sign up!</h1>

    <p>
     You need to <a href="{{ url('register/confirm/{$user->token}') }}">confirm your email address.</a> 
    </p>

</body>
</html>