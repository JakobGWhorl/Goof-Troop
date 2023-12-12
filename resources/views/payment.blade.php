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
 <footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="logout_button">
            
        </form>
          <a href={{ session('dashboard') }}> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
    </div>
</footer>
</html>