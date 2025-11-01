@props(['type' => 'info'])
<div {{ $attributes->merge(['class' => "alert alert-$type"]) }}>
    {{ $slot }}
</div>
<!-- untuk nomor 4 -->