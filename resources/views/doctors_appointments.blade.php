<!DOCTYPE html>
<head>
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <title>Doctor's Appointment</title>
</head>
    <body>
        <form action={{ url("") }} method="POST" class="form">
            @csrf
            <div>
                <h1 class="title">Doctor's Appointment</h1>
                <div class="form-input">
                    <Label>Patient ID: </Label>
                    <input type="text" name="patient_id">    
                </div>
                <div class="form-input">
                    <Label>Date: </Label>
                    <input type="datetime" name="appointment_date">    
                </div>
                <div class="form-input">
                    <label>Doctor: </label>
                    <input type="text" name="Doctor">    
                </div>
                <div class="form-input">
                    <label>Patient Name: </label>
                    <input type="text" name="patient_name">    
                </div>
                <div class="form-input">
                    <button id="ok" class="app_button">Ok</button>
                    <button id="cancel" class="app_button">Cancel</button>
                </div>
            </div>
            
        </form>
        <a href="http://127.0.0.1:8000/admin_dashboard"><button><span>Back</span></button></a>
       
    </body>
    <footer class="footer">
        <form action={{ url('/Logout') }} method="POST" class="bottom">
          @csrf
         <input type="submit" value="Logout" class="app_button">
      </footer>
</html>

<div>

    
    
    
</div>