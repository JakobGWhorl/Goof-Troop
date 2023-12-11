<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/patient_list.css') }}>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <title>Patients</title>

<body>



<div class="content">
<form class="form">
    <div class="enter">
        <div class="header">
            <h1>Patient List</h1>
        </div>
<h4>
    <div class='form-input'>
        <label for="">
            Search Patient ID</label>
        <input type="number" name="id" id="">
    </div>
    <div class='form-input'>
        <label for="">
            Search Patient Name</label>
        <input type="text" name="name" id="">
    </div>
    <div class='form-input'>
        <label for="">
            Search Patient Age</label>
        <input type="number" name="age" id="">
    </div>
    <div class='form-input'>
        <label for="">
            Search Patient Emergency Contact Number</label>
        <input type="tel" name="number" id="">
    </div>
    <div class='form-input'>
        <label for="">
            Search Patient Emergency Contact Name</label>
        <input type="text" name="emergencyname" id="">
    </div>
    <div class='form-input'>
        <label for="">
            Search Patient Admission Date</label>
        <input type="date" name="admissiondate" id="">
    </div>
    <div class='button-group'>
        <a href="http://127.0.0.1:8000/patient_of_doctor"> <button class="button" style="vertical-align:middle"><span>Submit</span></button></a>
    </div>
    <div class='button-group'>
        <a href="http://127.0.0.1:8000/doctor_dashboard"> <button class="button" style="vertical-align:middle"><span>Return to Dashboard</span></button></a>
    </div>

  </h4>
  <form>
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
    let table = new DataTable('#PatientsTable', {

});
</script>
