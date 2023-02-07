<div>
    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        {{ $label }}
    </label>
</div>
<div class="col-span-2">
    @foreach ($options as $option)
    <div>
        <label>
            {!! Form::checkbox($name, $option->id, null, ['class'=>'mr-1']) !!}
            {{ $option->name }}                    
        </label>
    </div>
    @endforeach
    @error('name')
        <span class="text-sm text-red-400">{{ $message }}</span>
    @enderror    
</div>
