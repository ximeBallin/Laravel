<div style="padding: 15px; border: 1px solid #ccc; margin-bottom: 15px; border-radius: 5px;">
    <div style="font-size: 1rem; color: #111; margin-bottom: 15px;">
        {{ $attributes->get('id', '6QwfKjmluC5Gy1AMkNYf 2') }}
    </div>

    <ul style="list-style-type: disc; margin-left: 20px; margin-bottom: 20px; font-family: monospace; font-size: 0.95rem;">
        <li>whereStartsWith: {{ $attributes->whereStartsWith('data')->toHtml() }}</li>
        <li>whereDoesntStartWith: {{ $attributes->whereDoesntStartWith('data')->toHtml() }}</li>
        <li>has: {{ $attributes->has('class') ? '1' : '' }}</li>
        <li>get: {{ $attributes->get('class') }}</li>
        <li>filter: {{ $attributes->filter(fn ($value, $key) => $key == 'data-id')->toHtml() }}</li>
    </ul>

    <h1 style="font-size: 2.2rem; font-weight: bold; margin-bottom: 5px;">
        {{ $title ?? 'Nuevo titulo desde el componente' }}
    </h1>

    <p style="color: #333; margin: 0 0 10px 0; font-size: 1.1rem;">
        {{ $date ?? '2022-08-09 17:08:37' }}
    </p>

    <div style="font-size: 1rem; line-height: 1.5; color: #111;">
        {{ $slot }}
    </div>
</div>
