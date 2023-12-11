<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/CaregiverHome.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <title>Doctor Homepage</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Doctors Homepage</h1>
        </div>
        <table id="DoctorHomeTable" class="display ">
            <thead>
                <tr>
                    <th>appointmentID</th>
                    <th>comment</th>
                    <th>patientID</th>   
                    <th>Doctor</th> 
                    <th>Name</th> 
                    <th>Morning med</th> 
                    <th>Afternoon med</th> 
                    <th>Night med</th>         
                    <th>Date</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $employee)
                <tr>
                    <td>{{ $employee->appointmentID }}</td>
                    <td>{{ $employee->comment }}</td>
                    <td>{{ $employee->patientID }}</td>
                    <td>{{ $employee->Doctor }}</td>
                    <td>{{ $employee->Name }}</td>
                    <td>{{ $employee->Morning_med }}</td>
                    <td>{{ $employee->Afternoon_med }}</td>
                    <td>{{ $employee->Night_med }}</td>
                    <td>{{ $employee->Date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    <div class="button-group">
        <div> <a href="http://127.0.0.1:8000/Patients"> <button class="button" style="vertical-align:middle"><span>Patient List</span></button></a></div>
       
    </div>

</body>

<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="logout_button">
            
          </form>
          <a href="http://127.0.0.1:8000/doctor"> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
        </div>
  </footer>
<html>
    <script>
        let table = new DataTable('#DoctorHomeTable', {
    
    });
    </script>