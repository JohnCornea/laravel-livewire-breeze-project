<form wire:submit="submit">
    <div class="grid grid-cols-2 gap-2">
        <div class="mb-0 pb-0 py-0">
            <input wire:model="form.title" placeholder="Title" class="rounded py-2 px-3 w-full" type="text" id="title">
            @error('form.title')
                <div class="text-red-500">{{$message}}</div>
            @enderror
            <input wire:model="form.body" placeholder="Description" class="rounded py-2 px-3 w-full" type="text" id="body">
            @error('form.body')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div>
            <button class="bg-blue-500 px-4 font-sand text-white rounded hover:bg-blue-700 h-full uppercase">
                <div>S</div>
                <div>A</div>
                <div>V</div>
                <div>E</div>
            </button>
        </div>
    </div>
</form>