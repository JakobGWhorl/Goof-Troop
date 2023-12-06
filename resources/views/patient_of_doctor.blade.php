<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/patient_of_doctor.css'); }}>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css'); }}>
    <title>"Patient Name" Appointment</title>
<body>
    <body class="bodyHP">
        <div class="enter">
            <div class="header">
                <h1>"Patient Names" Appointment Details</h1>
            </div>
            <div class="button-group">
                <div> <a href=""> <button class="button" style="vertical-align:middle"><span>Old Prescription</span></button></a></div>
                <div> <a href="http://127.0.0.1:8000/patients"><button class="button" style="vertical-align:middle"><span>Back to Patients</span></button></a></div>
                <div><a href="http://127.0.0.1:8000/prescriptions"><button class="button" style="vertical-align:middle"><span>Patients Perscriptions</span></button></a></div>
              </div>



</body>
<table id="PatientsAppointmentsTable" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>

</html>


<script>
    let table = new DataTable('#PatientsAppointmentsTable', {

});
</script>


<script>
    let table = new DataTable('#PatientsAppointmentsTable', {

});
</script>
