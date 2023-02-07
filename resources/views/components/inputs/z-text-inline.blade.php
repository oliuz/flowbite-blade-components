<div>
    <label class="block text-gray-500 font-bold text-right mb-1 pr-4 mt-2" for="inline-full-name">
        {{ $label }}
    </label>
</div>
<div class="col-span-2">
    <input class="bg-gray-100 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="{{ $name }}" name="{{ $name }}" type="text" value="{{ $value }}" autofocus>
    @error('name')
        <span class="text-sm text-red-400">{{ $message }}</span>
    @enderror
</div>
