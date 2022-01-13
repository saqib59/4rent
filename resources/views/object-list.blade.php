
<x-app-layout>
    <div class="main-content min-h-screen">
        <div class="mx-auto py-4 sm:px-6 lg:px-4">
            @livewire('object-list',['property'=>$property, 'types'=>$types])
        </div>
    </div>
</x-app-layout>
