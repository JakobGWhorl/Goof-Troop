<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/RosterView.css'); }}>
    <title>Supervisor Dashboard</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Roster View</h1>
        </div>

         <form action="Get" class="form">
            @csrf
            <div class="form-input">
                <label> Date</label>
                <input type="date" value="date"/>
                <input type="submit" value="Enter" >
            </div>
            

         </form>
        
        <div class="button">
            <a href="http://127.0.0.1:8000/CareGiver"> <button class="button1" style="vertical-align:middle"><span>Back To Dashboard</span></button></a>
         </div>
         

    </div>
</body>
<footer class="footer">
    <form action={{ url('/Logout') }} method="POST" class="bottom">
      @csrf
     <input type="submit" value="Logout" class="app_button">
  </footer>
</html>