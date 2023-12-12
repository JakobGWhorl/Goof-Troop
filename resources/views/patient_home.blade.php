<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/patient_home.css') }}>
    <title>Patient Home</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Patient Home</h1>
        </div>

        <div class="button">
            <form method="POST" action="{{ url('/patientSearch') }}" id="patientForm">
                @csrf
                <label> Patient ID</label>
                <input type="number" name="patientID" id="patientID" onkeyup="findPatientName()" value="{{ empty($data) ? '' : $data->patient_id }}" />
                <br>
                <label> Patient Name</label>
                <input type="text" name="patientName" id="patientID" value="{{ empty($data) ? '' : $data->first_name }}" />
                <br>
                <label> Date</label>
                <input type="date" id="theDate"  />
          </form>
        </div>

            <div class="row2">
                <table border="2">
                    <tr>
                      <th>Doctors name</th>
                      <th>Doctors Appointment</th>
                      <th>Caregivers Name</th>
                      <th>Morning Medicine</th>
                      <th>Afternoon Medicine</th>
                      <th>night Medicine</th>
                      <th>breakfast</th>
                      <th>Lunch</th>
                      <th>dinner</th>
                    </tr>
                    <tr>
                      <td>Skibidi Masters</td>
                      <td>12/23/24</td>
                      <td>Susan</td>
                      <td>✅</td>
                      <td>✅</td>
                      <td>✅</td>
                      <td>✅</td>
                      <td>✅</td>
                      <td>✅</td>
                    </tr>
                  </table>
            </div>



    </div>

    <script>
      function findPatientName() {
            var patientID = document.querySelector('#patientID').value;

            if (patientID.length === 1) {
                document.getElementById('patientForm').submit();
            }
        }
    </script>
</body>
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
<script src={{ URL::asset('js/patient_home.js') }}></script>
