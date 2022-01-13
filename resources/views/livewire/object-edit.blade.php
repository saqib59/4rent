<div class="row" >
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card white-box p-0">
            <div class="card-heading pb-2">
                <h3 class="box-title mb-0">{{$property->name}} Obejct Details</h3>
            </div>

            <div class="card-body">
                {{-- --}}
                <form action="{{route('property.update')}}" id="tenanet_form" method="post">
                    {{-- Step 1 --}}
                    @csrf
                    <input  type="hidden" name="id"  value="{{$property->id}}">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="py-4" id="step1" >
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 ">
                                <label for="kind">Kind</label>
                                <select name="kind"
                                        class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="Sir/Madam" selected disabled>Object Kind</option>
                                    <option value="Sir">Type 01</option>

                                </select>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="property_name">Property Name</label>
                                <input placeholder="{{$property->name}}" type="text" name="property_name" data-rules='["required"]'  value="{{$property->name}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="property_name">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="zipcode">Zip Code</label>
                                <input placeholder="Zip code" name="zipcode" type="text"  value="{{$property->zip_code}}"
                                       data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="zipcode">
                            </div>

                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="house_no">Street and House number</label>
                                <input placeholder="Street and House number" type="text" name="house_no" value="{{$property->street}}"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="house_no">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 ">
                                <label for="city">City</label>
                                <input placeholder="City" type="text" name="city" value="{{$property->city}}"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="city">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12r">
                                <label for="zip_code">Zip Code</label>
                                <input placeholder="Zip Codes" name="zip_code" type="text"  value="{{$property->zip_code}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="img">
                            </div>

                        </div>

                    </div>

                    {{-- Step 2 --}}
                    <div class="py-4" id="step2"  >
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="floor_no">Floor Number</label>
                                <input placeholder="Floor number" name="floor_no" type="text"  value="{{$property->floor}}"
                                       data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="floor_no">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Rooms" type="text" name="rooms" data-rules='["required"]'  value="{{$property->no_of_rooms}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="rooms">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="rent_per_month">Rent Per Month</label>
                                <input placeholder="Cold rent per month" type="text" name="rent_per_month" data-rules='["required"]'  value="{{$property->rent_pm}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="rent_per_month">
                            </div>
                        </div>
                        <div class="row pt-2" >
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="anicallary_cost">Anicallary cost prepayment</label>
                                <input placeholder="Anicallary cost prepayment" type="text" name="anicallary_cost" value="{{$property->anicallary_cost}}"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="anicallary_cost">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="deposite">Deposite</label>
                                <input placeholder="Deposite" type="text" name="deposite" value="{{$property->deposite}}"
                                       data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="deposite">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="sqm">Living space in sqm</label>
                                <input placeholder="Living space in sqm" name="sqm" type="text" data-rules='["required"]' value="{{$property->sqm}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="sqm">
                            </div>
                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="py-4" id="step3" >
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="no_kitchen">Number of kitchen</label>
                                <input placeholder="Number of kitchen" name="no_kitchen" type="text" value="{{$property->no_of_kitchens}}"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="no_kitchen">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="no_bathroom">Number of bathrooms</label>
                                <input placeholder="Number Of bathrooms" type="text" name="no_bathroom" data-rules='["required"]' value="{{$property->no_of_bathrooms}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="no_bathroom">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 ">
                                <label for="no_floor">Number of Floors</label>
                                <input placeholder="Number of Floors" name="no_floor" type="text" data-rules='["required"]' value="{{$property->no_of_floor}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="no_floor">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="no_attic">Number of attic rooms</label>
                                <input placeholder="Number of attic rooms" name="no_attic" type="text" data-rules='["required"]' value="{{$property->no_of_attic}}"
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="no_attic">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="celler">Celler</label>
                                <select name="celler"
                                        class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="-1" selected disabled>Celler</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>

                                </select>
                            </div>

                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="commiunity">To be used by community</label>
                                <input placeholder="To be used by community" type="text" name="commiunity" data-rules='["required"]'  value="{{$property->commiunity}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="commiunity">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="objspec">Add. Object specification</label>
                                <input placeholder="Add. Object specification" name="objspec" type="text"  value="{{$property->specification}}"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="objspec">
                            </div>
                        </div>
                    </div>
                    {{-- Step 4 --}}
                    <div class="py-4" id="step4" >
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="rooms_key">Keys in hours rooms</label>
                                <input placeholder="Keys in hours rooms" type="text" name="rooms_key" data-rules='["required"]'  value="{{$property->front_keys}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="rooms_key">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="apartment_key">Keys apartement door</label>
                                <input placeholder="Keys apartement door" name="apartment_key" type="text" data-rules='["required"]' value="{{$property->front_keys}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="apartment_key">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 ">
                                <label for="front_key">Keys front door</label>
                                <input placeholder="Keys front door" name="front_key" type="text" data-rules='["required"]' value="{{$property->front_keys}}"
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="front_key">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="celler_key">Keys celler</label>
                                <input placeholder="Keys celler" type="text" name="celler_key" data-rules='["required"]' value="{{$property->celler_key}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="celler_key">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="attic_key">Keys attic</label>
                                <input placeholder="Keys attic" name="attic_key" type="text" data-rules='["required"]'  value="{{$property->attic_key}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="attic_key">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="postbox_key">Keys post box</label>
                                <input placeholder="Key post box" name="postbox_key" type="text" data-rules='["required"]' value="{{$property->post_key}}"

                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="postbox_key">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="other_key">Other keys</label>
                                <input placeholder="Other Key" type="text" name="other_key" data-rules='["required"]'  value="{{$property->other_key}}"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="other_key">
                            </div>
                        </div>
                    </div>
                    <div class="py-5">
                        <div class="row justify-center">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-6 col-xs-12 flex items-center">

                                <div class="col-md-6 col-lg-6 col-sm-6 col-6 col-xs-12 flex items-center justify-end">


                                    <button
                                        type="submit"
                                        id="teanetSubmitButton"

                                        @click="submitForm"

                                        class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-center text-white bg-green-500 hover:bg-green-600 font-medium">
                                        Finish
                                    </button>
                                </div>
                            </div>
                        </div>
                </form>
                {{-- Wizard Navigations --}}


            </div>
        </div>
    </div>
</div>

@section('js')
    <script>


    </script>
@endsection
