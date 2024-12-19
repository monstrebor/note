<div>
    @if (session('success'))
        <span class="px-3 py-3 bg-green-500 text-white rounded"> {{ session('success') }} </span>
    @endif

    <form wire:submit='createNewUser' action="">

        <input class="block rounded border border-gray-100 px-3 py-1 mt-1" wire:model="name" type="text" name="" id="" placeholder="name">
        @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <input class="block rounded border border-gray-100 px-3 py-1 mt-1" wire:model="email" type="email" name="" id="" placeholder="email">
                @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <input class="block rounded border border-gray-100 px-3 py-1 mt-1" wire:model="password" type="password" name="" id="" placeholder="password">
                @error('password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <button class="block rounded px-3 py-1 bg-gray-400 text-white" >Create</button>
    </form>

    <hr>
    @foreach ($users as $item)
            <h2>{{ $item->name }}</h2>
    @endforeach

    {{ $users->links() }}
</div>
