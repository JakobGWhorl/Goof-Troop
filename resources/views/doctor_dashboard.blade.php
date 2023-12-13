<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <title>Doctor Dashboard</title>
</head>
<body>
    <div>
        <div class="header">
            <h1 class="title">Doctor Dashboard</h1>
        </div>


        <div class="row">
          <div> <a href="{{url('/patients')}}"> <button class="button" ><span>Patients</span></button></a></div>
          <div> <a href="{{url('/doctor_home')}}"><button class="button" ><span>Home</span></button></a></div>

          <div><a href="{{url('/prescriptions')}}"><button class="button" ><span>Prescriptions</span></button></a></div>
        </div>

    </div>
</body>
<footer class="footer">
    <form action={{ url('/Logout') }} method="POST" class="bottom">
        @csrf
        <input type="submit" value="Logout" class="logout_button">
      </form>


  </footer>
</html>
