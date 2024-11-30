@props(['label', 'name', 'search' => false])

@php
    // Define default styles
    $baseClass = 'rounded-xl bg-white/10 border border-white/10 w-full';

    $classes = $search ? 'px-5 py-4 w-full' : 'px-4 py-2';
    // Conditionally apply styles based on the input type

    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => "$baseClass $classes",
        'value' => old($name),
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>
