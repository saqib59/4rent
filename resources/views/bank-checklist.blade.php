<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bank Checklist') }}
        </h2>
    </x-slot>

    <div class="main-content">
        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-4">

            {{--<livewire:property />--}}
            @livewire('bank-checklist')
            <x-jet-section-border />

        </div>
    </div>
</x-app-layout>
