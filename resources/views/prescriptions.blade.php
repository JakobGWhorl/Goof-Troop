
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prescription</title>
</head>
<body>
    <form id = "employeesregistration" action={{ url('/api/employees') }} method="POST" class="form">
        @csrf
<div class="content">
    <div class="header">
        <h1>Prescriptions</h1>
    </div>
    <form class="form">
        <div class="form-input">
            <label for="">Patient ID</label>
            <input type="interger" name="patient_id">
        </div>
        <div class="form-input">
            <label for="">Afternoon Medication</label>
            <input type="text" name="Afternoon_med">
        </div>
        <div class="form-input">
        <label for="">Night Medication</label>
        <input type="text" name="Night_med">
        </div>
        <div class="form-input">
        <label for="">Morning Medication</label>
        <input type="text" name="Morning_med">
        </div>
        <div class="form-input">
        <label for="">Comments</label>
        <input type="text" name="comments">
        </div>
        <div class="form-input">
        <label for="date">Date</label>
        <input required type="date" name="date">
        </div>

        <div class="button-group">
            <a href=""> <button class="button" style="vertical-align:middle"><span>Submit</span></button></a>
        </div>
        <div class="button-group">
            <a href="http://127.0.0.1:8000/doctor_dashboard"> <button class="button" style="vertical-align:middle"><span>Return to Dashboard</span></button></a>
         </div>
        </form>

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
</html>
