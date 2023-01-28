<div>
    <h1 class="text-4xl">Avatar</h1>

    <hr class="my-8">

    <p><strong>ID</strong> {{ $user->id }}</p>
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>
    <p>
        <a href="/" class="text-blue-900 italic underline">Volver</a>
    </p>

    <hr class="my-8">

    <form wire:submit.prevent="update()" enctype="multipart/form-data">
        <div class="flex items-center">
            @if($user->avatar)
                <img src="{{ asset('storage/' . $user->avatar) }}"
                     alt="{{ $user->name }}"
                     class="mr-4 rounded-full w-24">
            @endif
            <input type="file" wire:model="file">
            <button class="bg-blue-700 uppercase text-white p-2">
                Subir Avatar
            </button>
        </div>
        @error('file')
            <p class="italic text-xs text-red-900">{{ $message }}</p>
        @enderror
        @if(session()->has('message'))
            <p class="italic text-xs text-blue-900">{{ session('message') }}</p>
        @endif
    </form>

</div>
