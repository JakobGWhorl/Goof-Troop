<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='' method="GET">
        @csrf
        <label for="Morning_med">Morning Medication</label>
        <input type="checkbox" id="Morning_med">
        <label for="Afternoon_med">Afternoon Medication</label>
        <input type="checkbox" id="Afternoon_med">
        <label for="Night_med">Night Medication</label>
        <input type="checkbox" id="Night_med">
        <label for="Date">Date</label>
        <input type="text">
        <label for="Breakfast">Breakfast</label>
        <input type="checkbox" id="Breakfast">
        <label for="Lunch">Lunch</label>
        <input type="checkbox" id="Lunch">
        <label for="Dinner">Lunch</label>
        <input type="checkbox" id="Dinner">
    </form>
</body>
</html>