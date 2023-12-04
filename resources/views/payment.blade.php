<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment/title>
    </head>
    <body>

        <form action={{ url('') }} method="POST">
            @csrf
            <label for="">Patient ID</label>
            <input type="text" name="patient_id">
            <br>
            <label for="">Total Ammount Due</label>
            <input type="integer" name="total_due">
            <br>
            <input type="submit">
            <br>


            </form>


 </body>
