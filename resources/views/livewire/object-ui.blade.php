<div class="row" x-data="property()">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card white-box p-0">
            <div class="card-heading pb-2">
                <h3 class="box-title mb-0">New Object Details</h3>
            </div>

            <div class="card-body">
                {{-- --}}
                <form action="{{route('property.create')}}" id="tenanet_form" method="get">
                    {{-- Step 1 --}}
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="py-4" id="step1" x-show.transition.in="step === 1">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <select name="kind"
                                        class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="Sir/Madam" selected disabled>Object Kind</option>
                                    <option value="Sir">Type 01</option>

                                </select>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Object Name (nickname)" type="text" name="property_name" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="property_name">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Zip code" name="zipcode" type="text"
                                       data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="zipcode">
                            </div>

                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Street and House number" type="text" name="house_no"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="house_no">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="City" type="text" name="city"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="city">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Zip Codes" name="img" type="file"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="img">
                            </div>

                        </div>

                    </div>

                    {{-- Step 2 --}}
                    <div class="py-4" id="step2" x-show.transition.in="step === 2" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Floor number" name="floor_no" type="text"
                                       data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="floor_no">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Rooms" type="text" name="rooms" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="rooms">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Cold rent per month" type="text" name="rent_per_month" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="rent_per_month">
                            </div>
                        </div>
                        <div class="row pt-2" >
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Anicallary cost prepayment" type="text" name="anicallary_cost"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="anicallary_cost">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Deposite" type="text" name="deposite"
                                       data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="deposite">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Living space in sqm" name="sqm" type="text" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="sqm">
                            </div>
                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="py-4" id="step3" x-show.transition.in="step === 3" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Number of kitchen" name="no_kitchen" type="text"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="no_kitchen">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Number Of bathrooms" type="text" name="no_bathroom" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="no_bathroom">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Number of Floors" name="no_floor" type="text" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="no_floor">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Number of attic rooms" name="no_attic" type="text" data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="no_attic">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <select name="celler"
                                        class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="-1" selected disabled>Celler</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>

                                </select>
                            </div>

                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="To be used by community" type="text" name="commiunity" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="commiunity">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Add. Object specification" name="objspec" type="text"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="objspec">
                            </div>
                        </div>
                    </div>
                    {{-- Step 4 --}}
                    <div class="py-4" id="step4" x-show.transition.in="step === 4" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Keys in hours rooms" type="text" name="rooms_key" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="rooms_key">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Keys apartement door" name="apartment_key" type="text" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="apartment_key">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Keys front door" name="front_key" type="text" data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="front_key">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Keys celler" type="text" name="celler_key" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="celler_key">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Keys attic" name="attic_key" type="text" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="attic_key">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Key post box" name="postbox_key" type="text" data-rules='["required"]'

                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="postbox_key">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Other Key" type="text" name="other_key" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="other_key">
                            </div>
                        </div>
                    </div>
                </form>
                {{-- Wizard Navigations --}}
                <div class="py-5">
                    <div class="row justify-center">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-6 col-xs-12 flex items-center">
                            <button
                                x-show="step > 1"
                                @click="step--"
                                style="display: none;"
                                class="focus:outline-none py-2 px-4 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">
                                Back
                            </button>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-6 col-xs-12 flex items-center justify-end">
                            <button

                                x-show="step < 4"
                                @click="processStep"
                                class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                                Next
                            </button>

                            <button
                                type="submit"
                                id="teanetSubmitButton"
                                x-show="step === 4"
                                @click="submitForm"
                                style="display: none;"
                                class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-center text-white bg-green-500 hover:bg-green-600 font-medium">
                                Finish
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@section('js')
    <script>
        function property() {
            var tenanetForm = document.querySelector('#tenanet_form');
            return {
                step: 1,
                property_name : { errorMessage:'', blurred:false },
                city : { errorMessage:'', blurred:false },
                zipcode : { errorMessage:'', blurred:false },
                house_no : { errorMessage:'', blurred:false },
                sqm : { errorMessage:'', blurred:false },
                deposite : { errorMessage:'', blurred:false },
                anicallary_cost : { errorMessage:'', blurred:false },
                rent_per_month : { errorMessage:'', blurred:false },
                rooms : { errorMessage:'', blurred:false },
                floor_no : { errorMessage:'', blurred:false },
                objspec : { errorMessage:'', blurred:false },
                commiunity : { errorMessage:'', blurred:false },
                no_attic : { errorMessage:'', blurred:false },
                no_floor : { errorMessage:'', blurred:false },
                no_bathroom : { errorMessage:'', blurred:false },
                no_kitchen : { errorMessage:'', blurred:false },

                other_key : { errorMessage:'', blurred:false },
                postbox_key : { errorMessage:'', blurred:false },
                attic_key : { errorMessage:'', blurred:false },
                celler_key : { errorMessage:'', blurred:false },
                front_key : { errorMessage:'', blurred:false },
                apartment_key : { errorMessage:'', blurred:false },
                rooms_key : { errorMessage:'', blurred:false },

                processStep: function () {
                    let id = '#step' + this.step;
                    this.inputElements = [...this.$el.querySelectorAll(id + " input[data-rules]")];
                    console.log(this.step);
                    let isValid = true;


                    this.inputElements.map((input) => {
                        if (Iodine.is(input.value, JSON.parse(input.dataset.rules)) !== true) {
                            const error = Iodine.is(input.value, JSON.parse(input.dataset.rules));

                            input.classList.add("border-red-500");
                            this[input.name].errorMessage = Iodine.getErrorMessage(error);
                            this[input.name].blurred = true;

                            isValid = false;
                        } else {
                            input.classList.remove("border-red-500");
                            this[input.name].errorMessage = "";
                        }
                    });

                    if (isValid) {
                        this.step++;
                    }
                },

                blur: function(event) {
                    let ele = event.target;
                    this[ele.name].blurred = true;
                    let rules = JSON.parse(ele.dataset.rules)
                    this[ele.name].errorMessage = this.getErrorMessage(ele, rules);
                },

                input: function(event) {
                    let ele = event.target;
                    let rules = JSON.parse(ele.dataset.rules)
                    this[ele.name].errorMessage = this.getErrorMessage(ele, rules);
                },
                getErrorMessage: function(input, rules){
                    let isValid = Iodine.is(input.value, rules);

                    if (isValid !== true) {
                        input.classList.add("border-red-500");
                        return Iodine.getErrorMessage(isValid);
                    }

                    input.classList.remove("border-red-500");
                    return '';
                },

                submitForm: function () {
                    tenanetForm.submit();
                }
            }
        }

        function tenanetOneValidation() {
            return {


            }
        }
        function tenanetTwoValidation() {

        }


    </script>
@endsection

{{-- <div>
    <form action="{{ route('create_property') }}" method="get">
        <div class="md:grid md:grid-cols-4">
            <div class="md:col-span-4  justify-between">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif



                <div class="px-4 py-5 bg-white sm:p-6 sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="col-span-6 sm:col-span-6">
                        <label class="block font-medium text-lg text-gray-700" for="type">New Tenant Details</label>
                    </div>
                    <div class="col-span-3 sm:col-span-3">
                        <hr class="col-span-3">
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <tbody>
                                <tr class="align-top">
                                    <td class="px-6 py-4 col-md-4">
                                        <select class="w-full">
                                            <option value="Sir/Madam" selected disabled>Sir/Madam</option>
                                            <option value="Sir">Sir</option>
                                            <option value="Madam">Madam</option>
                                        </select>
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="First Name">
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="Email">
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Recent Street + House Number">
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="Recent City">
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="Zip Code">
                                    </td>
                                    <td class="text-left  px-6 py-4 font-bold col-md-4">
                                        <select class="invisible"></select>
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="Last Name">
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Telephone Number">
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Identification-ID">
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="Birthday"
                                            onfocus="(this.type='date')">
                                    </td>
                                    <td class=" px-6 py-4 col-md-4">
                                        <label class="block font-medium text-sm text-black-500 mt-2" for="type">
                                            Soll folgendem Objekt zugeordnet werden:
                                        </label>
                                        <select class="w-full mt-6">
                                            <option value="Sir/Madam" selected disabled>Objekt 1: (Hahnstralße)</option>

                                        </select>
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Date of move in" onfocus="(this.type='date')">
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Date onide inspection" onfocus="(this.type='date')">
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                        
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <button style="background-color: #606060;color: white"
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-6 rounded-l">
                            2ten Mieter hinzufügen
                        </button>
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <tbody>
                                <tr class="align-top">
                                    <td class="px-6 py-4 col-md-4">
                                        <select class="w-full">
                                            <option value="Sir/Madam" selected disabled>Sir/Madam</option>
                                            <option value="Sir">Sir</option>
                                            <option value="Madam">Madam</option>
                                            

                                        </select>
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="First Name">
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="Email">
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Recent Street + House Number">
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="Recent City">
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="Zip Code">
                                    </td>
                                    <td class="text-left  px-6 py-4 font-bold col-md-4">
                                        <select class="invisible"></select>
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="Last Name">
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Telephone Number">
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Identification-ID">
                                        <input class="w-full mt-6" type="text" name="" id="" placeholder="Birthday"
                                            onfocus="(this.type='date')">
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Number of tenants">
                                    </td>
                                    <td class=" px-6 py-4 col-md-4">
                                        <label class="block font-medium text-sm text-black-500 mt-2" for="type">
                                            Soll folgendem Objekt zugeordnet werden:
                                        </label>
                                        <select class="w-full mt-6">
                                            <option value="Sir/Madam" selected disabled>Objekt 1: (Hahnstralße)</option>
                                        </select>
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Date of move in" onfocus="(this.type='date')">
                                        <input class="w-full mt-6" type="text" name="" id=""
                                            placeholder="Date onide inspection" onfocus="(this.type='date')">
                                    </td>
                                </tr>
                            </tbody>

                        </table>


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
                        <button style="background-color: #606060;color: white"
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-6 rounded-l">
                            Add Tenant
                        </button>
                        <button style="background-color: #ebebeb;"
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-6 rounded-l">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div> --}}
