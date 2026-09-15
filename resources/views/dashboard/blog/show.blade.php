@extends('dashboard.master')

@section('content')
    <div style="padding: 20px; font-family: Arial, sans-serif;">

        {{-- Propiedad pasada al componente (identificador o código aleatorio superior) --}}
        <div style="font-size: 1rem; color: #111; margin-bottom: 10px;">
            6QwfKjmluC5Gy1AMkNYf 2
        </div>

        {{-- Título principal --}}
        <h1 style="font-size: 2.2rem; font-weight: bold; margin-bottom: 5px;">
            Nuevo titulo desde el componente
        </h1>

        {{-- Fecha --}}
        <p style="color: #333; margin: 0 0 10px 0; font-size: 1.1rem;">
            2022-08-09 17:08:37
        </p>

        {{-- Contenido con las etiquetas <p> visibles --}}
        <div style="font-size: 1rem; line-height: 1.5; color: #111;">
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae aperiam culpa veritatis quasi laudantium mollitia quidem est blanditiis ullam illum cupiditate suscipit, quia, itaque quaerat? Iure debitis laudantium aliquam maxime!&lt;/p&gt;
        </div>

    </div>
@endsection
