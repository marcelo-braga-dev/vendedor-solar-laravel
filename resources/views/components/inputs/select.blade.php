<div class="form-group">
    <label class="form-control-label">{{ $label }}</label>
    <select name="{{ $name }}" {{$attributes}} class="form-control-alternative d-block rounded text-muted" 
    style="width: 100%; padding: 11px !important">
        {{ $slot }}
    </select>
</div>