<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <title>Supervisor Dashboard</title>
</head>
<body>
  <div class="content">
    <div class="header">
        <h1>Supervisor Dashboard</h1>
    </div>

    <div class="button-group">
      <div> <a href=""> <button class="button"><span>Patient<br> Information</span></button></a></div>
      <div> <a href="{{url('/doctors_appointment')}}"><button class="button"><span>Appointments</span></button></a></div>
      <div><a href="{{url('/employees')}}"><button class="button"><span>Employees</span></button></a></div>
      <div> <a href=""> <button class="button"><span>Patients</span></button></a></div>
    </div>

    <div class="button-group row2">
      <div> <a href="{{url('/registration_approval')}}"><button class="button" style="vertical-align:middle"><span>Registration Approval</span></button></a></div>
      <div> <a href="{{url('/create/roster')}}"><button class="button" style="vertical-align:middle"><span>Roster</span></button></a></div>
      <div> <a href="{{url('/reports')}}"> <button class="button" style="vertical-align:middle"><span>Admin Report</span></button></a></div>
    </div>      
    
  </div>
</body>
<footer class="footer">
  <form action={{ url('/Logout') }} method="POST" class="bottom">
    @csrf
   <input type="submit" value="Logout" class="logout_button">
</footer>
</html>