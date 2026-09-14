@extends('dashboard.master')

@section('content')
    <div style="padding: 20px; font-family: Arial, sans-serif;">
        <h2 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 15px;">
            Listado principal de post
        </h2>

        <p style="color: #555; margin-bottom: 10px;">
            Listado principal de post -- slot con nombre
        </p>

        {{-- Primer bloque simulando slot con nombre en múltiples líneas --}}
        <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 5px;">
            <div style="font-weight: bold; font-size: 1.1rem;">
                6QwfKjmluC5Gy1AMkNYf 2
            </div>
            <div style="margin: 10px 0;">
                Ir <br>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae
            </div>
            <div style="color: #666; font-size: 0.9rem;">
                UST568N25QHGMnfG3lu9
            </div>
        </div>

        {{-- Segundo bloque --}}
        <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 5px;">
            <div style="font-weight: bold; font-size: 1.1rem;">
                Ir
            </div>
            <div style="margin: 10px 0;">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae
            </div>
            <div style="color: #666; font-size: 0.9rem;">
                Extra
            </div>
        </div>

        {{-- Paginación simulada idéntica a la imagen --}}
        <div style="margin-top: 20px; display: flex; justify-content: space-between; align-items: center;">
            <p style="color: #666;">Showing 1 to 2 of 60 results</p>
            <div>
                <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px; background: #eee;">&lt;</span>
                <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px; background: #000; color: #fff;">1</span>
                <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">2</span>
                <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">3</span>
                <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">4</span>
                <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">&gt;</span>
            </div>
        </div>
    </div>
@endsection
