<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
   
<head>
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <title>Registration Approval</title>
</head>
<body>
    <form action={{ url("") }} method="POST" class="form">
        @csrf
        <div class="format">
            <h1 class="title">Registration Approval</h1>
            <div class="form-input">
                <Label>Name</Label>
                <label for="">Role</label>
                <label for="yes">Yes</label>
                <input type="checkbox" name="yes" class="checkbox">
                <label for="no">No</label>
                <input type="checkbox" name="no" class="checkbox">
            </div>
            
            <div class="form-input">
                <button id="ok" class="appbutton">Ok</button>
                <button id="cancel" class="appbutton">Cancel</button>
            </div>
        </div>
        
    <div class="datatable">
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
                <th></th>
               
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
                <td><button>Approve</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
   
    
</body>
<footer class="footer">
    <form action={{ url('/Logout') }} method="POST" class="bottom">
      @csrf
     <input type="submit" value="Logout" class="logout_button">
  </footer>
</html>
<script>
    let table = new DataTable('#EmployeesTable', {

});
</script>