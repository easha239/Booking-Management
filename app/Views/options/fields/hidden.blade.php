@php
    if (empty($value)) {
        $value = $std;
    }
    $idName = str_replace(['[', ']'], '_', $id);
@endphp
<input type="hidden" class="form-control"
       name="{{ $id }}"
       id="{{ $idName }}" value="{{ $value }}">
