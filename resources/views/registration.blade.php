<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Employee Registration</title>
    {{-- Link to css --}}
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>    
</head>
<body>
    <div class="background_setup"></div>
    <div class="background_setup animation"></div>
    <div class="background_setup animation2"></div>
<form class='form'>
    <div>
        <div class='form-input'>
            <label for="registration-type">Choose Registration Type:</label>
            <select name="registration-type" id="registration-type">
                <option value="patient">Patient</option>
                <option value="employee">Employee</option>                    
            </select>
        </div>
        <div class='error'>
            <div>
            @isset($error)
                {{ $error }}
            @endisset
            </div>
        </div>
    </div>

</form>

<form id = "employeesregistration" action={{ url('/api/employees') }} method="POST" class="form">
    @csrf
    <div>
        <h1>New Employee Registration</h1>

        <div class="form-input">
            <label for="">First Name: </label>
            <input required  type="text" name="first_name">
        </div>
        <div class="form-input">
            <label for="">Last Name: </label>
            <input required type="text" name="last_name">
        </div>
        <div class="form-input">
            <label for="role">Role: </label>
            <select required name="role" id="">
                @foreach ($roles as $role)
                    <option value="{{ $role['role'] }}">{{ $role['role'] }}</option>                
                @endforeach
                
                
            </select>
        </div>
        <div class="form-input">
            <label for="">Email: </label>
            <input required placeholder="email@emailprovider.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required type="email" name="email">
        </div>
        <div class="form-input">
            <label for="">Phone: </label>
            <input required type="tel" placeholder='000-000-0000' pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone">
        </div>
        <div class="form-input">
            <label for="">Password: </label>
            <input required pattern="^(?=.*[a-zA-Z])(?=.*\d).{6,}$" type="password" name="password"style="cursor:pointer;" placeholder="1 letter/1 digit/6 or longer" title="Must be 6 cahracters or longer and contain 1 letter and 1 digit">
        </div>
        <div class="form-input">
            <label for="">Date of Birth: </label>
            <input required type="date" name="dob">
        </div>
        <input class='submit' type="submit">
        
    </div>
</form>

<form id ="patientsregistration" action={{ url('/api/patients') }} method="POST" class='form'>
    @csrf
    <div>
        <h1>New Patient Registration</h1>
        <div class='form-input'>
            <label for="first_name">First Name:</label>
            <input required type="text" name="first_name">
        </div>
        <div class='form-input'>
            <label for="last_name">Last Name:</label>
            <input required type="text" name="last_name">
        </div>  
        <div class='form-input'>
            <label for="email">Email:</label>
            <input required placeholder="email@provider.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" name="email">
        </div>
        <div class='form-input'>
            <label for="phone_number">Phone:</label>
            <input required type="tel" placeholder='000-000-0000' pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone_number">
        </div>
        <div class='form-input'>
            <label for="password">Password:</label>
            <input required pattern="^(?=.*[a-zA-Z])(?=.*\d).{6,}$" type="password" name="password"style="cursor:pointer;" placeholder="1 letter/1 digit/6 or longer" title="Must be 6 cahracters or longer and contain 1 letter and 1 digit">
        </div>
        <div class='form-input'>
            <label for="dob">Date of Birth:</label>
            <input required type="date" name="dob">
        </div>
        <div class='form-input'>
            <label for="emergency_contact">Emergency Contact:</label>
            <input required type="tel" placeholder='000-000-0000' pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="emergency_contact">
        </div>
        <div class='form-input'>
            <label for="emergency_contact_relationship">Emergency Contact Relationship:</label>
            <input required type="text" name="emergency_contact_relationship">
        </div>
        <div class='form-input'>
            <label for="family_code" style="height: 2em;margin-top: .5em;">Family Code:</label>
            <input type="text" name="family_code" id="family_code" disabled value="{{ $family_code }}" style="height: 2em">
        </div>
        <input type="hidden" name="family_code" value="{{ $family_code }}">
        <input type="hidden" name="role" value="Patient">
        <input type="hidden" name="admission_date" value="{{ date("Y-m-d H:i:s") }}">
        
        <input class='submit' type="submit">
    </div>
 

</form>
</body>

</html>
{{-- Link to JS --}}
<script src={{ URL::asset('js/registration.js') }}></script>