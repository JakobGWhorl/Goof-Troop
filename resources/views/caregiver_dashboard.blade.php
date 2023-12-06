<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <title>CareGiver Dashboard</title>
</head>
<body>
    <div class="content">
        <div class="header">
            <h1>Caregiver Dashboard</h1>
        </div>

        <div class="button-group">
            <a href=""> <button class="button" ><span>Patients</span></button></a>
            <a href="http://127.0.0.1:8000/caregiver_home"><button class="button" ><span>Home</span></button></a>
            <a href="http://127.0.0.1:8000/roster_view"><button class="button" ><span>Roster</span></button></a>
        </div>
      
    </div>
</body>
<footer class="footer">
    <form action={{ url('/Logout') }} method="POST" class="bottom">
        @csrf
        <input type="submit" value="Logout" class="app_button">
      </form>
       
      
  </footer>
</html>