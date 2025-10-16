@props(['type' => 'info'])
<div {{ $attributes->merge(['class' => "alert-$type"]) }}> {{ $slot }}</div>