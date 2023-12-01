<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="content">
        <div class="header"> 
            <h1>Admin Dashboard</h1>
        </div>
        <form action={{ url('/Logout') }} method="POST">
            @csrf
           <input type="submit" value="Logout">
    
        <div class="button-group">
            <a href="http://127.0.0.1:8000/registration_approval"><button class="button"><span>Registration Approval</span></button></a>
            <a href="http://127.0.0.1:8000/doctors_appointment"><button class="button"><span>Doctors Appointment</span></button></a>
            <a href="http://127.0.0.1:8000/payment_view"><button class="button"><span>View Payments</span></button></a>
        </div>
        <div class='button-group row2'>
            <a href="http://127.0.0.1:8000/reports"><button class="button"><span>Reports</span></button></a>
            <a href="http://127.0.0.1:8000/roles"><button class="button"><span>Roles</span></button></a>
        </div>
   </div> 
   
</form>
</body>
<footer class="footer">
    <form action={{ url('/Logout') }} method="POST" class="bottom">
        @csrf
        <input type="submit" value="Logout" class="logout_button">
      </form>
       
    
  </footer>
</html>