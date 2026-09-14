@extends('dashboard.master')

@section('content')
    <div style="padding: 20px; font-family: Arial, sans-serif;">

        {{-- Componente normal con atributos --}}
        <x-alert data-id="medium" data-priority="medium" class="mb-4">
            <x-slot name="title">Nuevo titulo desde el componente</x-slot>
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae aperiam culpa veritatis quasi laudantium mollitia quidem est blanditiis ullam illum cupiditate suscipit, quia, itaque quaerat? Iure debitis laudantium aliquam maxime!&lt;/p&gt;
        </x-alert>

        <div style="font-size: 1rem; font-weight: bold; color: #111; margin: 20px 0 5px 0;">
            dinámico
        </div>

        {{-- Componente dinámico pasándole el nombre de la etiqueta por variable --}}
        @php
            $componentName = 'alert';
        @endphp

        <x-dynamic-component :component="$componentName" data-id="medium" data-priority="medium">
            <x-slot name="title">Nuevo titulo desde el componente</x-slot>
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae aperiam culpa veritatis quasi laudantium mollitia quidem est blanditiis ullam illum cupiditate suscipit, quia, itaque quaerat? Iure debitis laudantium aliquam maxime!&lt;/p&gt;
        </x-dynamic-component>

    </div>
@endsection
