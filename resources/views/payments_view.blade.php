<!DOCTYPE html>
<head>
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <title>Payments Due</title>
</head>
<body>
    <form action={{ url("") }} method="POST" class="form">
        @csrf
        <div class="form-input">
            <h1 class="title">Payments Due</h1>
            <Label>payments</Label>

            <div id="buttons">
                <button id="back" class="app_button">Back</button>
            </div>
        </div>
        
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