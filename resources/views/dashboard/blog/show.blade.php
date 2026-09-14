@extends('dashboard.master')

@section('content')
    <div style="padding: 20px; font-family: Arial, sans-serif;">

        {{-- Identificador superior --}}
        <div style="font-size: 1rem; color: #111; margin-bottom: 15px;">
            6QwfKjmluC5Gy1AMkNYf 2
        </div>

        {{-- Bloque de resultados de atributos (Simulando los métodos de filtrado de Blade) --}}
        <ul style="list-style-type: disc; margin-left: 20px; margin-bottom: 20px; font-family: monospace; font-size: 0.95rem; color: #111;">
            <li>whereStartsWith: data-id="medium" data-priority="medium"</li>
            <li>whereDoesntStartWith: class="mb-4"</li>
            <li>has: 1</li>
            <li>get: mb-4</li>
            <li>filter: data-id="medium" <span style="background-color: #2e75b6; color: #fff; padding: 2px 4px;">data-id="medium" data-priority="medium"</span></li>
        </ul>

        {{-- Título principal --}}
        <h1 style="font-size: 2.2rem; font-weight: bold; margin-bottom: 5px;">
            Nuevo titulo desde el componente
        </h1>

        {{-- Fecha --}}
        <p style="color: #333; margin: 0 0 10px 0; font-size: 1.1rem;">
            2022-08-09 17:08:37
        </p>

        {{-- Contenido con etiquetas <p> visibles --}}
        <div style="font-size: 1rem; line-height: 1.5; color: #111;">
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae aperiam culpa veritatis quasi laudantium mollitia quidem est blanditiis ullam illum cupiditate suscipit, quia, itaque quaerat? Iure debitis laudantium aliquam maxime!&lt;/p&gt;
        </div>

    </div>
@endsection
