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

    <div class="button">
        <form action={{ url('/Logout') }} method="POST" class="bottom">
            @csrf
           <input type="submit" value="Logout" class="app_button">
        </form>
        <a href="{{ session('dashboard') }}"> <button class="button1" style="vertical-align:middle"><span>Back To Dashboard</span></button></a>
    </div>
    
</footer>

</html>