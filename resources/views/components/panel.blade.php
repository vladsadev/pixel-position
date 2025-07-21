@php
    $defaultClasses = 'bg-white/5 rounded-xl p-4 border transition-colors duration-300 border-transparent
    hover:border-blue-800/50 group'
@endphp

<div {{$attributes([
 'class' => $defaultClasses
])}}>{{$slot}}</div>

