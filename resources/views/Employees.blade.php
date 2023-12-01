<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/Employees.css') }}>
    <title>Employees</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Employees</h1>
        </div>

        <div class="header">
         <form action="Get" class="form">
            @csrf
            <div class="form-input">
                <label> ID</label>
                <input type="integer" />
                <label> First Name</label>
                <input type="text" />

                <label> Last Name</label>
                <input type="text" />

                <label> Role</label>
                <input type="text" />

                <label> Email</label>
                <input type="text" />

                <label> Phone</label>
                <input type="text" />
                
                <label> Password</label>
                <input type="text" />
                
                <label> DOB</label>
                <input type="text" />
                
                <label> Salary</label>
                <input type="integer" /><br>
                <input type="submit" value="Search" >
            </div>


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
<footer class="footer">
    <form action={{ url('/Logout') }} method="POST" class="bottom">
      @csrf
     <input type="submit" value="Logout" class="logout_button">
  </footer>
</html>