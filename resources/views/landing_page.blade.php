<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/landingpage.css') }}>
    <title>Majima's Retirement Home</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Majima's Retirement Home</h1>
        </div>
        <div class="button">
            <a href="{{url('/login')}}"> <button class="button1" style="vertical-align:middle"><span>Login</span></button></a>
            <a href="{{url('/registration')}}"><button class="button1" style="vertical-align:middle"><span>Register</span></button></a>
            <a href="{{url('/family_member/access')}}"> <button class="button1" style="vertical-align:middle"><span>Family Member Access</span></button></a>          
        </div>
        <form action={{ url('/Logout') }} method="POST">
            @csrf
           <input type="submit" value="Logout" class="app_button">
        </form>
    </div>
</body>
</html>