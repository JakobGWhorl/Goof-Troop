<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <title>Roster</title>
</head>
<body>
    
<form action={{ url('/api/rosters') }} method="POST" class="form">
    @csrf
    <div>
        <h1>Create Roster</h1>
    <div class="input-form">
<label for="">Date</label>
<input type="date" name="date">
<br>
<label for="">Supervisor</label>
<input type="text" name="supervisor">
<br>
<label for="">Doctor</label>
<select name="doctor">
    <option value="doctor1">Doctor 1</option>
</select>
<br>
<label for="">CareGiver 1</label>
<select name="caregiver1">
    <option value="caregiver1">caregiver1</option>
</select>
<br>
<label for="">CareGiver 2</label>
<select name="caregiver2">
    <option value="caregiver2">caregiver2</option>
</select>
<br>
<label for="">CareGiver 3</label>
<select name="caregiver3">
    <option value="caregiver3">caregiver3</option>
</select>
<br>
<label for="">CareGiver 4</label>
<select name="caregiver4">
    <option value="caregiver4">caregiver4</option>
</select>
<input type="submit" >
<br>
</div>
    </div>

</form>



</body>
</html>