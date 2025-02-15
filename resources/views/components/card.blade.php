@props(
['highlight' => false]
)

@php
$quotes = ['Hecking powerful', 'Power beyond imagination', 'Inconceivable!', 'Over 9000!', 'Brute force', 'Absolute power', 'Goku level', 'Overpowered', 'Giga Chad', 'Musclehead', 'Flawless'];
@endphp

<a href="{{ $attributes->get('href') }}" @class(['highlight'=> $highlight, 'card']) data-title="{{ $attributes->get('title') }}">
    <div class="mask">
        <x-shuriken></x-shuriken>
    </div>
    {{ $slot }}
    @if($highlight)
    <div class="highlight-quote">
        {{ $quotes[array_rand($quotes)] }}
    </div>
    @endif
</a>
