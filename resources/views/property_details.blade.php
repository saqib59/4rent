<x-app-layout>
    <div class="main-content min-h-screen">
        <div class="mx-auto py-4 sm:px-6 lg:px-4">
            @livewire('property-details',['property' => $property])
        </div>
    </div>
</x-app-layout>
