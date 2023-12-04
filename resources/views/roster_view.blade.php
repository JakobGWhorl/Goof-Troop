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

        <div class="header">
         <form action="Get">
            @csrf
            <label> Date</label>
            <input type="date" value="date"/>
             <input type="submit" value="Enter" >

         </form>
        
        </div>
        <div class="button">
            <a href="{{ session('dashboard') }}"> <button class="button1" style="vertical-align:middle"><span>Back To Dashboard</span></button></a>
         </div>

    </div>
</body>
</html>