<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pub Management System</title>
    <!-- Incluir aqui seus links para CSS, Bootstrap, etc. -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts ao final do corpo -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
