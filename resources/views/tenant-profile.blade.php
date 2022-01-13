
<x-app-layout>
    <div class="main-content min-h-screen">
        <div class="mx-auto py-4 sm:px-6 lg:px-4">
            @livewire('tenant-notice',['tenant' => $tenant])
        </div>
    </div>
</x-app-layout>
