<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <title>Schedule</title>
</head>
<body>
    <form action='' method="GET" class="form">
        @csrf
        <div class="form-input">
            <label for="Morning_med">Morning Medication</label>
            <input type="checkbox" id="Morning_med">

            <label for="Afternoon_med">Afternoon Medication</label>
            <input type="checkbox" id="Afternoon_med">

            <label for="Night_med">Night Medication</label>
            <input type="checkbox" id="Night_med">

            <label for="Date">Date</label>
            <input type="date">

            <label for="Breakfast">Breakfast</label>
            <input type="checkbox" id="Breakfast">

            <label for="Lunch">Lunch</label>
            <input type="checkbox" id="Lunch">

            <label for="Dinner">Lunch</label>
            <input type="checkbox" id="Dinner">
        </div>

    </form>
    
</body>
<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="logout_button">
            
          </form>
          <a href="http://127.0.0.1:8000/caregiver"> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
        </div>
  </footer>
</html>