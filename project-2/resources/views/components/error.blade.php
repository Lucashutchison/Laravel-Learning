@props([
    'name' => 'required'
])

<div class="col-span-full text-red-500 italic">
            @error($name)
                <p>{{ $message }}</p>
            @enderror
</div>