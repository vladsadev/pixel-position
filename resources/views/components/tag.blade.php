@props(['size'=> 'base'])
{{--px-3 py-1--}}
@php
    $classes = "bg-white/10 font-bold rounded-xl hover:bg-white/25 transition-colors duration-300";

    if($size === 'base'){
        $classes .= ' px-4 py-1 text-sm';
    }

    if($size === 'small'){
        $classes .= ' px-3 py-1 text-tiny';
    }
@endphp


<a href="#" class="{{$classes}}">{{$slot}}</a>
