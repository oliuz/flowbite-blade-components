<div>
    <label class="block text-gray-500 font-bold text-right mb-1 pr-4 mt-2" for="{{ $name }}">
        {{ $label }}
    </label>
</div>
<div class="col-span-2">
    <select multiple id="{{ $name }}" name="{{ $name }}[]"  {{ $attributes->merge(['class'=>'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'])}}>
        @foreach($options as $option)
            <option value="{{ $option['id'] }}" 
            {{-- {{ in_array($option['value'], $values) ? 'selected' : '' }} --}}
            >
                {{ $option['name'] }}
            </option>
        @endforeach
    </select>
    @error('name')
        <span class="text-sm text-red-400">{{ $message }}</span>
    @enderror
</div>
