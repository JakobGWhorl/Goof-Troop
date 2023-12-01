<!DOCTYPE html>
<head>
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <title>Doctor's Appointment</title>
</head>
    <body>
        <form action={{ url("") }} method="POST" class="form">
            @csrf
            <div>
                <h1>Doctor's Appointment</h1>
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
                <div id="buttons">
                    <button id="ok">Ok</button>
                    <button id="cancel">Cancel</button>
                </div>
            </div>
            
        </form>
       
       
    </body>
    <footer class="footer">
        <div class="bottom">
            <form action={{ url('/Logout') }} method="POST" >
                @csrf
                <input type="submit" value="Logout" class="logout_button">
                
              </form>
              <a href="http://127.0.0.1:8000/caregiver"> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
            </div>
      </footer>
</html>

<div>

    
    
    
</div>