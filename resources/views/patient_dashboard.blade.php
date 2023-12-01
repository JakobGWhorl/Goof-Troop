<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <title>Patient Dashboard</title>
</head>
<body>
    <div class="content">
        <div class="header">
            <h1>Patient Dashboard</h1>
        </div>

        <div class="button-group">
            <a href=""> <button class="button" ><span>Home</span></button></a>
            <a href="http://127.0.0.1:8000/RosterView"><button class="button" ><span>Roster</span></button></a>
        </div>
       
    </div>
</body>
<footer class="footer">
    <form action={{ url('/Logout') }} method="POST" class="bottom">
      @csrf
     <input type="submit" value="Logout" class="logout_button">
  </footer>
</html>