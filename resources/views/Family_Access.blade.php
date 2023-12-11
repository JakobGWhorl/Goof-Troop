<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <title>Family Member</title>
</head>
<body>
    <form action="" class="form">
        @csrf
        <div>
            <h1 class="title">Family member access</h1>
        </div>
        <div>
            
            <div class="form-input">
                <label for="patient_ID">Patient ID</label>
                <input type="text" id="patient_id">
                <label for="family_code">Family Code</label>
                <input type="text" id="family_code">
            </div>
            <div class="form-input">
                <label for="date">Date</label>
                <input type="date">
            </div>
            
            <button class="app_button">OK</button>
            <button class="app_button">Cancel</button>
        </div>
    </form>
    <table id="patient_schedule">
        <thead>
            <tr>
                <th>Doctor's Name</th>
                <th>Doctor's Appointment</th>
                <th>Caregiver's Name</th>
                <th>Morning Medicine</th>
                <th>Afternoon Medicine</th>
                <th>Night Medicine</th>
                <th>Breakfast</th>
                <th>Lunch</th>
                <th>Dinner</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</body>
</html>