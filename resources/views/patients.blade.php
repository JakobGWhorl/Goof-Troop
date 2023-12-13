<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/patient_of_doctor.css') }}>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css'); }}>
    <title>Your Patients</title>
<body>
    <body class="bodyHP">
        <div class="enter">
            <div class="header">
                <h1>Your Patients </h1>
            </div>
            <div class="button-group">
                <div> <a href="{{url('/patient')}}"><button class="button" style="vertical-align:middle"><span>Dashbaord</span></button></a></div>
              </div>



</body>
<table id="PatientsAppointmentsTable" class="display">
    <thead>
        <tr>
            <th>Patient ID</th>
            <th>first Name</th>
            <th>Last Name</th>   
            <th>email</th> 
            <th>phone</th> 
            <th>password</th> 
            <th>dob</th> 
            <th>faily code</th>         
            <th>emergency contact</th> 
            <th>Relationship</th> 
            <th>role</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
        <tr>
            <td>{{ $patient->patient_id }}</td>
            <td>{{ $patient->first_name }}</td>
            <td>{{ $patient->last_name }}</td>
            <td>{{ $patient->email }}</td>
            <td>{{ $patient->phone_number }}</td>
            <td>{{ $patient->password }}</td>
            <td>{{ $patient->dob }}</td>
            <td>{{ $patient->family_code }}</td>
            <td>{{ $patient->emergency_contact }}</td>
            <td>{{ $patient->emergency_contact_relationship }}</td>
            <td>{{ $patient->role }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</html>
<footer class="footer">
    <form action={{ url('/Logout') }} method="POST" class="bottom">
        @csrf
        <input type="submit" value="Logout" class="app_button">
      </form>


  </footer>

<script>
    let table = new DataTable('#PatientsAppointmentsTable', {

});
</script>



