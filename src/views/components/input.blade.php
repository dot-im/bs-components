@if($hasErrors)
    @php($attributes['class'] =  $errors->has($attributes->get('name')) ? 'is-invalid' : null)
@endif

@if($label)
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
@endif

<input {{
    $attributes->merge([
        'type' => $type,
        'class' => 'form-control',
        'id' => $id,
        'value' => ($hasOld) ? old($attributes->get('name')) : $attributes->get('value')
    ])
}}>

@if($hasErrors)
    @error($attributes->get('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
@endif
