<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Employee Registration</title>
    {{-- Link to css --}}
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
</head>
<body>
    
<form action={{ url('/api/employees') }} method="POST" class="form">
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



</body>
</html>