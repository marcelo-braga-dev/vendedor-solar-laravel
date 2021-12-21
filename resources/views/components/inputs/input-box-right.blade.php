<div class="form-group">
    <label class="form-control-label">{{ $label }}</label>
    <div class="input-group input-group-alternative mb-4">
        <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" {{ $attributes }} class="form-control">
        <div class="input-group-append">
            <span class="input-group-text" style="font-size: 0.9rem">{{ $box }}</span>
        </div>
    </div>
</div>