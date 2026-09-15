@extends('dashboard.master')

@section('content')
    <div style="padding: 20px; font-family: Arial, sans-serif;">
        <h2 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 15px;">
            Listado principal de post
        </h2>

        <p style="color: #555; margin-bottom: 10px;">
            Listado principal de post -- slot con nombre
        </p>

        {{-- Primer bloque de prueba --}}
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

        {{-- Segundo bloque de prueba --}}
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

        {{-- Paginación real de Laravel (requiere que pases $posts con ->paginate() desde el controlador) --}}
        <div style="margin-top: 20px;">
            @if(isset($posts) && method_exists($posts, 'links'))
                {{ $posts->links() }}
            @else
                {{-- Paginación estática idéntica a la imagen si aún no pasas el objeto paginado --}}
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <p style="color: #666;">Showing 1 to 2 of 60 results</p>
                    <div>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">&lt;</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px; background: #eee;">1</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px; background: #000; color: #fff;">2</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">3</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">4</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">5</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">6</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">7</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">8</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">9</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">10</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">...</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">29</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">30</span>
                        <span style="padding: 5px 10px; border: 1px solid #ccc; margin: 2px;">&gt;</span>
                    </div>
                </div>
            @endif
        </div>

        {{-- Texto final de la imagen --}}
        <div style="margin-top: 30px; font-size: 1rem; color: #333;">
            Pie de página
        </div>
    </div>
@endsection
