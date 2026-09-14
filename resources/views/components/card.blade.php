<div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 10px; border-radius: 6px;">
    <h2>{{ $title }}</h2>
    <p>{{ $slot }}</p>

    @isset($footer)
        <div style="margin-top: 10px;">
            {{ $footer }}
        </div>
    @endisset
</div>
