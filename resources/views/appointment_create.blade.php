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
        <label for="Doctor">Doctor</label>
        {{-- @foreach ($doctor as $row)
            <option value="{{$row->Doctor}}"></option>
        @endforeach --}}
        <label for="comment">Comment</label>
        <input type="text">
        <label for="Morning_med">Morning Medication</label>
        <input type="checkbox" id="Morning_med">
        <label for="Afternoon_med">Afternoon Medication</label>
        <input type="checkbox" id="Afternoon_med">
        <label for="Night_med">Night Medication</label>
        <input type="checkbox" id="Night_med">
        <label for="Date">Date</label>
        <input type="date">

    </form>
</body>
</html>