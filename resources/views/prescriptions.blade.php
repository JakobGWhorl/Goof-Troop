
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prescription</title>
</head>
<body>
    <form action={{ url('') }} method="POST">
        @csrf
        <label for="">Patient ID</label>
        <input type="text" name="patient_id">
        <br>
        <label for="">Afternoon Medication</label>
        <input type="text" name="Afternoon_med">
        <br>
        <label for="">Night Medication</label>
        <input type="text" name="Night_med">
        <br>
        <label for="">Morning Medication</label>
        <input type="text" name="Morning_med">
        <br>
        <label for="">Comments</label>
        <input type="text" name="comments">
        <br>
        <label for="">Date</label>
        <input type="timestamp" name="date">
        <br>
        <input type="submit">
    </form>
</body>
</html>
