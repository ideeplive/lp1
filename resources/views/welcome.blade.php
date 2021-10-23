<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using style.css and Script.js</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Use React</h1>
    <h1>Use SCSS</h1>
    <img src="images/laxmi.png" alt="laxmi Image" width="150px" height="90px">
    <img src="{{ asset('images/laxmi.png') }}" alt="laxmi Image" width="150px" height="90px">
    <img src="{{ url('images/laxmi.png') }}" alt="laxmi Image" width="150px" height="90px">

    <hr>

    {{-- Use Bootstrap using npm laravel mix --}}
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
    
    <button type="button" class="btn btn-link">Link</button>




    <script src="{{ asset('js/myscript.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>