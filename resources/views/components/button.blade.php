@props(['href' => null, 'variant' => 'primary', 'icon' => null])

@php
    $variants = [
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        'outline' => 'btn-outline',
    ];
    $classes = 'btn ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
        @if($icon)
            <i class="{{ $icon }}" style="font-size: 1.2em;"></i>
        @endif
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
        @if($icon)
            <i class="{{ $icon }}" style="font-size: 1.2em;"></i>
        @endif
    </button>
@endif
