<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ Auth::user()->name }}
            {{-- {{ config('app.name') }} --}}
        </h2>
    </x-slot>
</x-app-layout>
