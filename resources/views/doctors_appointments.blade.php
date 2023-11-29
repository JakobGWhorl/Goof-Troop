<!DOCTYPE html>
<head>

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
</html>

<div>

    
    
    
</div>