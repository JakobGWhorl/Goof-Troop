<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <title>Document</title>
</head>
<body>
    <form action='' method="GET" class="form center">
        @csrf
            
        <div class="format">
            <h1 class="title">Appointment Creation</h1>
            <div class="form-input">
                <label for="Doctor">Doctor: </label>
                <input type="text">
                <BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="comment">Comment: </label>
                <input type="text"> 
            </div>
                <div class="form-input"> 
                    <label for="Morning_med">Morning Medication: </label>
                    <input type="checkbox" id="Morning_med" class="checkbox">
                    <label for="Afternoon_med">Afternoon Medication: </label>
                    <input type="checkbox" id="Afternoon_med" class="checkbox">
                    <label for="Night_med">Night Medication: </label>
                    <input type="checkbox" id="Night_med" class="checkbox">
                </div>
                <div class="form-input">
                    <label for="Date">Date: </label>
                    <input type="date">   
                </div>
                
        </div>
    </form>
   
</body>
<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="app_button">
            
          </form>
          <a href="{{ session('dashboard') }}"> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
        </div>
  </footer>
</html>