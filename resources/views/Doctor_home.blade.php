<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/CaregiverHome.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <title>Doctor Homepage</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Doctors Homepage</h1>
        </div>



    <div class="button-group">
        <a href="http://127.0.0.1:8000/patients"> <button class="button" style="vertical-align:middle"><span>Patient List</span></button></a>
        <a href="http://127.0.0.1:8000/doctor_dashboard"> <button class="button" style="vertical-align:middle"><span>Return to Dashboard</span></button></a>
    </div>

</body>

<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="logout_button">

          </form>
          <a href="http://127.0.0.1:8000/doctor"> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
        </div>
  </footer>
<html>
