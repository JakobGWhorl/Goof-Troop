<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <title>caregiver Home</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Caregiver's Home</h1>
        </div>
    </div>
</body>
<footer class="footer">
  <div class="bottom">
    <form action={{ url('/Logout') }} method="POST" >
        @csrf
        <input type="submit" value="Logout" class="logout_button">
        
      </form>
      <a href={{ session('dashboard') }}> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
    </div>
  </footer>
</html>
