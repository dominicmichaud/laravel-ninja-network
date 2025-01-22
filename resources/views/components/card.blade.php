@props(
['highlight' => false]
)

<div @class(['highlight'=> $highlight, 'card']) data-title="{{ $attributes->get('title') }}">
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn">View details</a>
</div>
