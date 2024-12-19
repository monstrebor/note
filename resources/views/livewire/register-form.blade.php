<div class="mt-10 p-6 mx-auto sm:w-full sm:max-w-md shadow-lg border-t-4 border-teal-500 rounded-lg bg-white">
    <div class="flex justify-center mb-6">
        <h2 class="text-center font-semibold text-2xl text-gray-800">Create New Account</h2>
    </div>
    @if (session('success'))
        <div class="text-green-600 text-[26px] mb-4">
            {{ session('success') }}
        </div>
    @endif
    <form wire:submit.prevent="create" enctype="multipart/form-data" class="space-y-5">        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input wire:model="name" type="text" id="name" placeholder="Enter your name"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-50">
            @error('name')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input wire:model="email" type="email" id="email" placeholder="Enter your email"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-50">
            @error('email')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input wire:model="password" type="password" id="password" placeholder="Enter your password"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm bg-gray-50">
            @error('password')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Profile Picture</label>
            <input wire:model="image" type="file" id="image" accept="image/png, image/jpeg, image/jpg"
                class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 bg-gray-50">
            @error('image')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit"
            class="w-full py-2 px-4 bg-teal-500 text-white font-semibold rounded-md shadow hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-offset-2">
            Create Account
        </button>
    </form>
</div>
