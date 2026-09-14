<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Post</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px;">

@php
    $currentPost = $post ?? $blog ?? $articulo ?? null;
@endphp

@if($currentPost)
    <h1>{{ $currentPost->title ?? $currentPost->titulo }}</h1>

    <p style="color: #777; font-size: 0.9em;">
        Fecha: {{ optional($currentPost->created_at)->format('Y-m-d H:i:s') }}
    </p>

    <div style="margin-top: 20px; font-size: 1.1em; line-height: 1.6;">
        {{ $currentPost->content ?? $currentPost->cuerpo }}
    </div>
@else
    <p style="color: red;">No se encontró la variable del post en el controlador.</p>
@endif

<br><br>
<a href="{{ url('dashboard/blog') }}">Volver al listado</a>
</body>
</html>
