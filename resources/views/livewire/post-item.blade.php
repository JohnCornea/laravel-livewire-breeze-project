<tr class="hover:bg-gray-200 dark:bg-gray-50">
    <td class="px-6 py-3 text-start text-sm">{{$post->id}}</td>
    <td class="px-6 py-3 text-start text-sm">{{$post->user->name}}</td>
    <td class="px-6 py-3 text-start text-sm">
        
        {{$post->title}}

        @if ($edit)
                <div class="post-update-form">
                    <livewire:post-update :post="$post" />
                </div>
        @endif

        <div>
            <button wire:click="$toggle('edit')" class="text-blue-500">Edit</button>
        </div>

    </td>
    <td class="px-6 py-3 text-start text-sm">{{$post->created_at->diffForHumans()}}</td>
    <td class="px-6 py-3 text-start text-sm hover:bg-white">
        <button wire:confirm="Are you sure you want to delete?" wire:click="destroy" class="bg-red-500 px-4 py-2 font-sans text-white rounded hover:bg-red-800">Delete</button>
    </td>
</tr>