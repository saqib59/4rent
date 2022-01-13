<x-app-layout>
    <div class="main-content">
        <div class="mx-auto sm:px-6 lg:px-8 pt-8 px-6">
            @livewire('homeinfocomponent',['property'=>$property, 'income' =>$income, 'tenant'=>$tenant])
            @livewire('homechart',['notice'=>$notice,'income_ranges'=>$income_ranges])
            @livewire('homemesseges',['empty_property'=>$empty_property])
        </div>
    </div>

</x-app-layout>
