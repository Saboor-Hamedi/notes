@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'bg-white'])

@php
$alignmentClasses = match ($align) {
    'left' => 'dropdown-menu-start',
    'top' => '',
    default => 'dropdown-menu-end',
};

$width = match ($width) {
    '48' => '', // Bootstrap dropdown width is managed by content, not class
    default => $width,
};
@endphp

<div class="dropdown">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div class="dropdown-menu {{ $alignmentClasses }} {{ $contentClasses }} {{ $width }}" style="display: none;" x-show="open">
        {{ $slot }}
    </div>
</div>
