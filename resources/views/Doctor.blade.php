<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/Supervisor.css'); }}>
    <title>Doctor Dashboard</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Doctor Dashboard</h1>
        </div>

        <div class="button">
          <div> <a href="http://127.0.0.1:8000/patients"> <button class="button1" style="vertical-align:middle"><span>Patients</span></button></a></div>
          <div> <a href="http://127.0.0.1:8000/Doctor_home"><button class="button1" style="vertical-align:middle"><span>Home</span></button></a></div>
          <div><a href="http://127.0.0.1:8000/prescriptions"><button class="button1" style="vertical-align:middle"><span>Prescriptions</span></button></a></div>
        </div>
    </div>
</body>
</html>
