<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/patient_list.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>

    <title>Patients</title>
</head>
<body>


</body>
<div class="inputfield">
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Patient List</h1>
        </div>
<h4>
    <div class='form-input'>
        <label for="">
            Search Patient ID</label>
        <input type="text" name="" id="">
    </div>
    <div class='form-input'>
        <label for="">
            Search Patient Name</label>
        <input type="text" name="" id="">
    </div>
    <div class='form-input'>
        <label for="">
            Search Patient Age</label>
        <input type="text" name="" id="">
    </div>
    <div class='form-input'>
        <label for="">
            Search Patient Emergency Contact Number</label>
        <input type="text" name="" id="">
    </div>
    <div class='form-input'>
        <label for="">
            Search Patient Emergency Contact Name</label>
        <input type="text" name="" id="">
    </div>
    <div class='form-input'>
        <label for="">
            Search Patient Admission Date</label>
        <input type="text" name="" id="">
    </div>
    
  </h4>
</div>
<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="logout_button">
            
          </form>
          <a href="http://127.0.0.1:8000/doctor"> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
        </div>
  </footer>
</html>
