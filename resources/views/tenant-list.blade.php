
<x-app-layout>
    <div class="main-content min-h-screen">
        <div class="mx-auto py-4 sm:px-6 lg:px-4">
            @livewire('tenant-list',['tenants'=>$tenants,'properties'=>$properties])
        </div>
    </div>
</x-app-layout>
