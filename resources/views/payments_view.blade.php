<!DOCTYPE html>
<head>

    <title>Payments Due</title>
</head>
<body>
    <form action={{ url("") }} method="POST" class="form">
        @csrf
        <div>
            <h1>Payments Due</h1>
            <Label>payments</Label>

            <div id="buttons">
                <button id="back">Back</button>
            </div>
        </div>
        
    </form>
    <div class="button">
        <a href="{{ session('dashboard') }}"> <button class="button1" style="vertical-align:middle"><span>Back To Dashboard</span></button></a>
     </div>
</body>
</html>