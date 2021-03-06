<div class="form-group">
    <label class="form-control-label">{{ $label }}</label>
    <div class="input-group input-group-alternative mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text" style="font-size: 0.9rem">{{ $box }}</span>
        </div>
        <input type="{{ $type }}" name="{{ $name }}" {{ $attributes }} value="{{ $value }}" class="form-control">
    </div>
</div>
