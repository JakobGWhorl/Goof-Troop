<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/homePage.css') }}>
    <title>Home Page</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Old Person Home</h1>
        </div>

        <div class="button">
           <a href="http://127.0.0.1:8000/login"> <button class="button1" style="vertical-align:middle"><span>Login</span></button></a>
            <a href="http://127.0.0.1:8000/registration"><button class="button1" style="vertical-align:middle"><span>Register</span></button></a>
        </div>
    </div>
</body>
</html>