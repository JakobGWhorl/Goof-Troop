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
</body>
</html>