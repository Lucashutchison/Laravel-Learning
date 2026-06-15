@props([
    'name' => 'required'
])

<div class="col-span-full text-red-500 italic ml-6">
            @error($name)
                <p>{{ $message }}</p>
            @enderror
</div>