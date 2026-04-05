@props(['name'])

@error($name)
<p class="text-xs text-red-500 text-semibold mt-1"> {{ $message }}</p>
@enderror