<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <title>Supervisor Dashboard</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Roster View</h1>
        </div>

         
         

    </div>
</body>
<div class='datatable'>
<table id="RosterTable" class="display ">
    <thead>
        <tr>
            <th>Roster ID</th>
            <th>Date</th>
            <th>Supervisor</th>   
            <th>Doctor</th> 
            <th>caregiver1</th> 
            <th>caregiver2</th> 
            <th>caregiver3</th> 
            <th>caregiver4</th>         
          
        </tr>
    </thead>
    <tbody>
        @foreach ($rosters as $employee)
        <tr>
            <td>{{ $employee->roster_id }}</td>
            <td>{{ $employee->date }}</td>
            <td>{{ $employee->supervisor }}</td>
            <td>{{ $employee->doctor}}</td>
            <td>{{ $employee->caregiver1 }}</td>
            <td>{{ $employee->caregiver2 }}</td>
            <td>{{ $employee->caregiver3 }}</td>
            <td>{{ $employee->caregiver4 }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="logout_button">
            
        </form>
          <a href={{ session('dashboard') }}> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
    </div>
  </footer>
</html>
<script>
    let table = new DataTable('#RosterTable', {

});
</script>