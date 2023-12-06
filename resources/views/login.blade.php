<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Employee Registration</title>
    {{-- Link to css --}}
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>    
</head>
<body>
    <div class="background"></div>
    <div class="background animation"></div>
    <div class="background animation2"></div>
    <form class='form center' method="POST" action="{{ url('/login') }}">
        @csrf
        <div>
            <h1 class="title">Login</h1>
            <div class="input">
                <div class='form-input'>
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email_field">
                </div>
                <div class='form-input password'>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password_field">
                </div>
            </div>    
            <input class='submit' type="submit" value="Submit">
            <a href="{{ url('/registration') }}"><button class = 'registration'>Don't have an account? Register here!</button></a>
            <div class='error'>
                @isset($error)
                    {{ $error }}
                @endisset
            </div>
                
            
                
            <form action={{ url('/Logout') }} method="POST">
                @csrf
               <input type="submit" value="Logout" class="app_button">
            </form>
        </div>
    </form>
    <div style="width:12em;margin:auto;">
        <a style='' href="{{ url('/registration') }}"><button>Don't have an account? Register here!</button></a>

    </div>
</body>
</html>