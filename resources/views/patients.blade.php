<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css'); }}>
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
</html>
