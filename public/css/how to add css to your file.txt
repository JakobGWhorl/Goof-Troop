In the head of your php file put this line

{{-- Link to css --}}
<link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>


you can change 'css/app.css' to the name of your css file
but link the app.css in every file you make
