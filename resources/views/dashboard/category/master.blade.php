<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Esto es vital para que carguen los estilos -->
    @vite(['resources/css/app.css', 'resources/js/app.css'])
</head>
<body class="bg-gray-100 font-sans antialiased">

<div class="container mx-auto mt-6">
    @yield('content')
</div>

</body>
</html>
