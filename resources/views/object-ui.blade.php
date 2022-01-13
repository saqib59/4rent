<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('object') }}
        </h2>
    </x-slot>

    <div class="main-content">
        <div class="max-w-9xl mx-auto py-4 sm:px-6 lg:px-4">

            {{--<livewire:property />--}}
            @livewire('object-ui')
            <x-jet-section-border />

        </div>
    </div>
</x-app-layout>
