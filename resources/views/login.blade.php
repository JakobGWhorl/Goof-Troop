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
    <form class='form' method="POST" action="{{ url('/login') }}">
        @csrf
        <div>
            <h1>Login</h1>
            <div class='form-input'>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email_field">
            </div>
            <div class='form-input'>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password_field">
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <input class='submit' type="submit" value="Submit">
            <a href="{{ url('/registration') }}"><button class = 'submit'>Don't have an account? Register here!</button></a>
            <div class='error'>
                @isset($error)
                    {{ $error }}
                @endisset
            </div>
                
            
                
            <form action={{ url('/Logout') }} method="POST">
                @csrf
               <input type="submit" value="Logout">
        </div>
    </form>
</body>
</html>