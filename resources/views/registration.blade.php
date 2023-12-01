<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Employee Registration</title>
    {{-- Link to css --}}
    <link rel="stylesheet" href={{ URL::asset('css/app.css') ;}}>    
</head>
<body>

<form class='form'>
    <div>
        <div class='form-input'>
            <label for="registration-type">Choose Registration Type:</label>
            <select name="registration-type" id="registration-type">
                <option value="patient">Patient</option>
                <option value="employee">Employee</option>                    
            </select>
        </div>
    </div>
</form>
    
<form id = "employeesregistration" action={{ url('/api/employees') }} method="POST" class="form">
    @csrf
    <div>
        <h1>New Employee Registration</h1>

        <div class="form-input">
            <label for="">First Name: </label>
            <input  type="text" name="first_name">
        </div>
        <div class="form-input">
            <label for="">Last Name: </label>
            <input type="text" name="last_name">
        </div>
        <div class="form-input">
            <label for="">Role: </label>
            <input type="text" name="role">
        </div>
        <div class="form-input">
            <label for="">Email: </label>
            <input type="text" name="email">
        </div>
        <div class="form-input">
            <label for="">Phone: </label>
            <input type="text" name="phone">
        </div>
        <div class="form-input">
            <label for="">Password: </label>
            <input type="text" name="password">
        </div>
        <div class="form-input">
            <label for="">Date of Birth: </label>
            <input type="date" name="dob">
        </div>
        <input type="submit">
        
    </div>
</form>

<form id ="patientsregistration" action={{ url('/api/patients') }} method="POST" class='form'>
    @csrf
    <div>
        <h1>New Patient Registration</h1>
        <div class='form-input'>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name">
        </div>
        <div class='form-input'>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name">
        </div>  
        <div class='form-input'>
            <label for="email">Email:</label>
            <input type="text" name="email">
        </div>
        <div class='form-input'>
            <label for="phone_number">Phone:</label>
            <input type="text" name="phone_number">
        </div>
        <div class='form-input'>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <div class='form-input'>
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob">
        </div>
        <div class='form-input'>
            <label for="emergency_contact">Emergency Contact:</label>
            <input type="text" name="emergency_contact">
        </div>
        <div class='form-input'>
            <label for="emergency_contact_relationship">Emergency Contact Relationship:</label>
            <input type="text" name="emergency_contact_relationship">
        </div>
        <div class='form-input'>
            <label for="family_code" style="height: 2em;margin-top: .5em;">Family Code:</label>
            <input type="text" name="family_code" id="family_code" disabled value="{{ $family_code }}" style="height: 2em">
        </div>
        <input type="hidden" name="family_code" value="{{ $family_code }}">
        <input type="hidden" name="role" value="patient">
        <input type="hidden" name="admission_date" value="{{ date("Y-m-d H:i:s") }}">
        
        <input type="submit">

    </div>
    


</form>

</body>

</html>
{{-- Link to JS --}}
<script src={{ URL::asset('js/registration.js'); }}></script>