<div>
    <form method="get" action="{{route('create_tenant')}}" wire:id="eoB1kcK3hYOE227uwrLO" class="md:grid md:grid-cols-4">
        <div class="md:col-span-4  justify-between">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                <div class="grid grid-cols-6 gap-6">
                    <!-- Profile Photo -->

                    {{-- First ROW Start--}}
                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="type">
                            Type
                        </label>
                        <select id="type" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="type">

                            <option value="1" >
                                Sir
                            </option>
                            <option value="2" >
                                Madam
                            </option>
                            <option value="3" >
                                Mr.
                            </option>
                            <option value="4" >
                                Mrs.
                            </option>

                        </select>
                    </div>

                    <!-- Email -->
                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="fname">
                           First Name
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="fname" name="fname" type="text">
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="lname">
                            Last Name
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="lname" type="text" name="lname">
                    </div>
                    {{-- First ROW End--}}

                    {{-- Third ROW Start--}}
                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="nic">
                            Identification-ID
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="nic" type="text" name="nic">
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            Email
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="email" type="email" name="email">
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="bday">
                            Birth Day
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="bday" type="date" name="bday">
                    </div>
                    {{-- Third ROW End--}}

                    {{-- Fourth ROW Start--}}
                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="object">
                            Object
                        </label>
                        <select id="object" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="object">

                            <option value="1" >
                                Object 1
                            </option>
                            <option value="2" >
                                Object 2
                            </option>
                            <option value="3" >
                                Object 3
                            </option>
                            <option value="4" >
                                Object 4
                            </option>

                        </select>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="dateofmove">
                            Date of Move in
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="dateofmove" name="dateofmove" type="date" >
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="inspection">
                            Date onside Inspection
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="inspection" type="date"name="inspection">
                    </div>
                    {{-- Fourth ROW End--}}

                    {{-- Fivth  ROW Start--}}
                    <div class="col-span-3 sm:col-span-1">
                        <label class="block font-medium text-sm text-gray-700" for="numofteanent">
                            Number of Tenant
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="numofteanent" type="number" name="numofteanent">
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="rehouse">
                            Recent Street + HouseNUmber
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="rehouse" type="text" name="rehouse">
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label class="block font-medium text-sm text-gray-700" for="city">
                            Recent city
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="city" type="text" name="city">
                    </div>
                    <div class="col-span-3 sm:col-span-1">
                        <label class="block font-medium text-sm text-gray-700" for="zip">
                            Zip code
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                            id="zip" type="number" name="zip">
                    </div>
                    <div class="col-span-3 sm:col-span-6">
                    </div>
                    <div class="col-span-3 sm:col-span-1">
                        <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6  sm:rounded-bl-md sm:rounded-br-md" style="margin-left: 65rem;">
                            <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('bpqInrNKPCGsohPofw4a').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class="text-sm text-gray-600 mr-3">
                                Saved.
                            </div>

                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:loading.attr="disabled" wire:target="photo">
                                Save
                            </button>
                        </div>
                    </div>

                    {{-- Fourth ROW End --}}

                </div>
            </div>
        </div>
    </form>
</div>
