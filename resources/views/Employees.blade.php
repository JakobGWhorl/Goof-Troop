
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/Employees.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css'); }}>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
   

   

    <title>Employees</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Employees</h1>
        </div>

        
        </div>
        
        
         
    </div>
    
<div class='datatable'>
<table id="EmployeesTable" class="display ">
    <thead>
        <tr>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>   
            <th>Role</th> 
            <th>Email</th> 
            <th>Phone</th> 
            <th>Password</th> 
            <th>DOB</th>         
            <th>Salary</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->employee_id }}</td>
            <td>{{ $employee->first_name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->role }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->password }}</td>
            <td>{{ $employee->dob }}</td>
            <td>{{ $employee->salary }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="app_button">
            
          </form>
          <a href={{ session('dasboard') }}> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
        </div>
</footer>
</html>
<script>
    let table = new DataTable('#EmployeesTable', {

});
</script>