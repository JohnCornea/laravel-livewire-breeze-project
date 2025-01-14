<div class="grid grid-cols-3 gap-2">

    <div class="container-1">
    <div class="w-full max-w-xs">
        <form wire:submit.prevent="create" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
              Title
            </label>
            <input wire:model="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text">
          </div>
          {{-- <div class="mb-0"> --}}
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                Description
                {{-- {{$name}} --}}
              </label>
            <textarea wire:model="description" class="rounded min-w-full" name="" id="" cols="30" rows="5"></textarea>
          <div class="flex justify-end">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flow" type="submit">
              Create
            </button>
          </div>
        </form>
    </div>
    </div>

    <div class="container-2 col-span-2">
    <table class="min-w-full divide-y divide-gray-300">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">Id</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">User</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">Title</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">Create At</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                
            <tr class="hover:bg-gray-200 dark:bg-gray-50">
                <td class="px-6 py-3 text-start text-sm">{{$post->id}}</td>
                <td class="px-6 py-3 text-start text-sm">{{$post->user->name}}</td>
                <td class="px-6 py-3 text-start text-sm">{{$post->title}}</td>
                <td class="px-6 py-3 text-start text-sm">{{$post->created_at->diffForHumans()}}</td>
                <td class="px-6 py-3 text-start text-sm hover:bg-white">
                    <button wire:click="destroy({{$post->id}})" class="bg-red-500 px-4 py-2 font-sans text-white rounded hover:bg-red-800">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="p-4">
        {{$posts->links()}}
    </div>
    </div>
</div>
