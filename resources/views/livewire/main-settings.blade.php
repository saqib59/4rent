<div>
    <form action="{{ route('create_property') }}" method="get">
        <div wire:id="eoB1kcK3hYOE227uwrLO" class="md:grid md:grid-cols-4">
            <div class="md:col-span-4  justify-between">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="grid grid-cols-6 gap-6">
                        <!-- Profile Photo -->

                        <div class="col-span-6 sm:col-span-6">
                            <label class="block font-medium text-lg text-gray-700" for="type">MAIN SETTINGS</label>
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <label class="block font-medium text-sm text-gray-700" for="type">Please check your account
                                information below</label>
                        </div>

                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="First Name"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Last Name"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Email"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Telephone Number"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Recent Address"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Identification-ID"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Recent City"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Birthday" onfocus="(this.type='date')"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Bank Account Name"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="IBAN"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Bank"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="BIC"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-6 sm:col-span-6 m-1">

                                <label class="inline-flex block font-medium text-sm text-gray-700" for="type"><input
                                        type="checkbox" class="form-checkbox text-gray-700"><span>&nbsp;&nbsp;Send email
                                        confirmation</span></label>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <hr>
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <button class="bg-gray-700 text-white hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                Save changes
                              </button>
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <label class="block font-medium text-sm text-gray-700" for="type">You can add a co-landlord here</label>
                        </div>
                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="First Name"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Last Name"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Email"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Telephone Number"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Recent Address"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Identification-ID"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Recent City"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                            <div class="col-span-3 sm:col-span-2 m-1">
                                <input placeholder="Birthday" onfocus="(this.type='date')"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block "
                                    id="zip" type="text" name="zip">
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-6 inline-flex">
                            <div class="col-span-6 sm:col-span-6 m-1">

                                <label class="inline-flex block font-medium text-sm text-gray-700" for="type"><input
                                        type="checkbox" class="form-checkbox text-gray-700"><span>&nbsp;&nbsp;Send email
                                        confirmation</span></label>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <hr>
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <button class="bg-gray-700 text-white hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                Save changes
                              </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
