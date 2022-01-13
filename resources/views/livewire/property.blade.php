<div>
    <form action="{{route('property.create')}}" method="get">
        <div wire:id="eoB1kcK3hYOE227uwrLO" class="md:grid md:grid-cols-4">
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
                            <select id="Type"  name="type"  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" >

                                <option value="1" >
                                    Type 01
                                </option>
                                <option value="2" >
                                Type 02
                                </option>

                                </select>
                        </div>

                        <!-- Email -->
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="name">
                                Name
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="name" type="text" name="name">
                        </div>
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="zip">
                                Zip Code
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="zip" type="text"name="zip">
                        </div>
                        {{-- First ROW End--}}

                        {{-- Second ROW Start--}}
                        <div class="col-span-1 sm:col-span-6">
                            <label class="block font-medium text-sm text-gray-700" for="description">
                                Description
                            </label>
                            <textarea style="width: 100%" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="value" @input="$emit('input', $event.target.value)" ref="input" name="description"></textarea>
                        </div>
                        {{-- Second ROW End--}}

                        {{-- Third ROW Start--}}
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="streetnumber">
                                Street Number
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="streetnumber" type="text" name="streetnumber">
                        </div>
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="city">
                                City
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="city" type="text" name="city">
                        </div>
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="country">
                                Country
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="country" type="text" name="country">
                        </div>
                        {{-- Third ROW End--}}

                        {{-- Fourth ROW Start--}}
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="noofroom">
                                Number of Rooms
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="noofroom" type="number" name="noofroom">
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="noofkit">
                                Number of kitchens
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="noofkit" type="number" name="noofkit">
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="nooffloor">
                                Number of floors
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="nooffloor" type="number" name="nooffloor">
                        </div>
                        {{-- Fourth ROW End--}}

                        {{-- Fivth  ROW Start--}}
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="rent">
                                Rent per month
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="rent" type="number" name="rent">
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="cost">
                               Anicaller cost payment
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="cost" type="number" name="cost">
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label class="block font-medium text-sm text-gray-700" for="deposite">
                               Deposit
                            </label>
                            <input
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                id="deposite" type="number" name="deposite">
                        </div>
                        {{-- Fourth ROW End --}}
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

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
