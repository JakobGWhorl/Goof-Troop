<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/Employees.css'); }}>
    <title>Employees</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Employees</h1>
        </div>

        <div class="header">
         <form action="Get">
            @csrf
            <label> ID</label>
            <input type="integer" />
            <br>
            <label> First Name</label>
            <input type="text" />
            <br>
            <label> Last Name</label>
            <input type="text" />
            <br>
            <label> Role</label>
            <input type="text" />
            <br>
            <label> Email</label>
            <input type="text" />
            <br>
            <label> Phone</label>
            <input type="text" />
            <br>
            <label> Password</label>
            <input type="text" />
            <br>
            <label> DOB</label>
            <input type="text" />
            <br>
            <label> Salary</label>
            <input type="integer" /><br>
             <input type="submit" value="Search" >

         </form>
        
        </div>
        <div class="middle">
            <h3>Employee List</h3>
        </div>
        <div class="button">
            
            <a href="http://127.0.0.1:8000/Supervisor"> <button class="button1" style="vertical-align:middle"><span>Back To Dashboard</span></button></a>
         </div>

    </div>
</body>
</html>