<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roster</title>
</head>
<body>
    
<form action={{ url('') }} method="POST">
    @csrf
<label for="">Date</label>
<input type="timestamp" name="date">
<br>
<label for="">Doctor</label>
<select name="doctor"></select>
<br>
<label for="">CareGiver 1</label>
<select name="caregiver1"></select>
<br>
<label for="">CareGiver 2</label>
<select name="caregiver2"></select>
<br>
<label for="">CareGiver 3</label>
<select name="caregiver3"></select>
<br>
<label for="">CareGiver 4</label>
<select name="caregiver4"></select>
<input type="submit">
<br>



</form>



</body>
</html>