@extends('dashboard.master')

@section('content')
    <div style="padding: 20px; font-family: Arial, sans-serif;">

        {{-- Título con fondo azul claro (estilo inspector de la imagen) --}}
        <h1 style="background-color: #b4c6e7; font-size: 2.2rem; font-weight: bold; padding: 5px 10px; margin-bottom: 5px;">
            Nuevo titulo desde el componente
        </h1>

        {{-- Fecha con fondo naranja claro --}}
        <p style="background-color: #fce4d6; padding: 5px 10px; margin: 0; font-size: 1.1rem;">
            2022-08-09 17:08:37
        </p>

        {{-- Contenido con fondo rojo claro y mostrando las etiquetas <p> explícitamente como en el video --}}
        <div style="background-color: #f8cbad; padding: 10px; margin-top: 5px; font-size: 1rem; line-height: 1.5;">
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae aperiam culpa veritatis quasi laudantium mollitia quidem est blanditiis ullam illum cupiditate suscipit, quia, itaque quaerat? Iure debitis laudantium aliquam maxime!&lt;/p&gt;
        </div>

    </div>
@endsection
