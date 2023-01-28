@extends('layouts.app')

@section('content')

    <h1 class="text-4xl">Usuarios</h1>

    <hr class="my-8">

    <table class="shadow-lg">
        <tbody>
            @foreach($users as $user)
                <tr class="text-gray-700">
                    <td class="px-4 py-3">{{ $user->id }}</td>
                    <td class="flex items-center px-4 py-3">
                        @if($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}"
                                 alt="{{ $user->name }}"
                                 class="mr-4 rounded-full w-8">
                        @endif
                        {{ $user->name }}
                    </td>
                    <td class="px-4 py-3">{{ $user->email }}</td>
                    <td class="px-4 py-3">
                        <a href="{{ route('avatar', $user->id) }}" class="underline text-blue-900 italic">Avatar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
