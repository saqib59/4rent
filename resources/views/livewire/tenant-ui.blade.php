<div class="row" x-data="tenant()">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card white-box p-0">
            <div class="card-heading pb-2">
                <h3 class="box-title mb-0">Neuer Mieter</h3>
            </div>

            <div class="card-body">
                {{-- --}}
                <form action="{{route('create_tenant')}}" id="create_property" method="get">
                {{-- Step 1 --}}
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="py-4" id="step1" x-show.transition.in="step === 1">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <select name="type_1"
                                        class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="Sir/Madam" selected disabled>Herr/ Frau</option>
                                    <option value="Sir">Herr</option>
                                    <option value="Madam">Frau</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Vorname" type="text" name="fname_1" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="fname_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="nachname" type="text" name="lname_1" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="lname_1">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Letzte Adresse - Straße und Hausnummer" type="text" name="rehouse_1"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="rehouse_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Letzter Wohnort" type="text" name="city_1"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="city_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Postleitzahl" type="text" name="zipcode_1"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="zipcode_1">
                            </div>
                        </div>

                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-12 py-4 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">2ten Mieter hinzufugen</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>

                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <select name="type_2"
                                        class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="Sir/Madam" selected disabled>Herr/ Frau</option>
                                    <option value="Sir">Herr</option>
                                    <option value="Madam">Frau</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Vorname" name="fname_2" type="text"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="fname_2">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="nachname" type="text" name="lname_2"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="lname_2">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Letzte Adresse - Straße und Hausnummer" name="rehouse_2" type="text"

                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="rehouse_2">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Letzter Wohnort" type="text" name="city_2"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="city_2">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Postleitzahl" name="zipcode_2" type="text"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="zipcode_2">
                            </div>
                        </div>
                    </div>

                    {{-- Step 2 --}}
                    <div class="py-4" id="step2" x-show.transition.in="step === 2" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="E-Mail" name="email_1" type="email" data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="email_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Handynummer" name="tp_1" type="text" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="tp_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Personalausweis Nummer" name="nic_1" type="text"
                                       data-rules='["required"]' @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="nic_1">
                            </div>
                        </div>
                        <div class="row pt-2" >
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    type="text" name="dob_1" id="dob_1" placeholder="Geburtstag" onfocus="(this.type='date')">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Personalausweis Nummer" name="no_tenant_1" type="text"
                                       data-rules='["required"]' @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="no_tenant_1">
                            </div>
                        </div>

                        <div class="row pt-2 justify-center second-teanent">
                            <div class="col-md-12 col-lg-12 py-4 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">2ten Mieter hinzufugen</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>

                        <div class="row pt-2 justify-center second-teanent">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="E-Mail" type="email" name="email_2"
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="email_2">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Handynummer" name="tp_2" type="text"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="tp_2">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input placeholder="Personalausweis Nummer" name="nic_2" type="text"
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="nic_2">
                            </div>
                        </div>
                        <div class="row pt-2 second-teanent">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    type="text" name="dob_2" id="dob_2" placeholder="Geburtstag" onfocus="(this.type='date')">
                            </div>
                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="py-4" id="step3" x-show.transition.in="step === 3" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <select
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="obj1" name="obj_1" selected disabled>Objekt 1:(Hahnstra)</option>
                                    @foreach($property as $prop)
                                        <option value="{{$prop->id}}" selected disabled>{{$prop->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    type="text" name="date_move_1" id="" placeholder="Beginn des Mietverhältnisses"
                                    onfocus="(this.type='date')">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    type="text" name="inspection_1" id="" placeholder="Zeitpunkt der Ortsbesichtigung"
                                    onfocus="(this.type='date')">
                            </div>
                        </div>

                        <div class="row pt-2 justify-center second-teanent">
                            <div class="col-md-12 col-lg-12 py-4 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">2ten Mieter hinzufugen</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>

                        <div class="row pt-2 justify-center second-teanent">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <select
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="obj1" name="obj_2" selected disabled>Objekt 1:(Hahnstra)</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    type="text" name="date_move_2" id="" placeholder="Beginn des Mietverhältnisses"
                                    onfocus="(this.type='date')">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <input
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    type="text" name="inspection_2" id="" placeholder="Zeitpunkt der Ortsbesichtigung"
                                    onfocus="(this.type='date')">
                            </div>
                        </div>

                        <div class="row pt-4">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <label class="inline-flex block font-medium text-sm text-gray-700" for="type">
                                    <input type="checkbox" class="form-checkbox text-gray-700"><span>&nbsp;&nbsp;Send email confirmation</span>
                                </label>
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

                                x-show="step < 3"
                                @click="processStep"
                                class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                                Next
                            </button>

                            <button
                                type="submit"
                                id="teanetSubmitButton"
                                x-show="step === 3"
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
        function tenant() {
            var tenanetForm = document.querySelector('#create_property');
            return {
                step: 1,
                fname_1 : { errorMessage:'', blurred:false },
                lname_1 : { errorMessage:'', blurred:false },
                rehouse_1 : { errorMessage:'', blurred:false },
                city_1 : { errorMessage:'', blurred:false },
                zipcode_1 : { errorMessage:'', blurred:false },
                email_1 : { errorMessage:'', blurred:false },
                tp_1 : { errorMessage:'', blurred:false },
                nic_1 : { errorMessage:'', blurred:false },
                dob_1 : { errorMessage:'', blurred:false },
                date_move_1 : { errorMessage:'', blurred:false },
                inspection_1 : { errorMessage:'', blurred:false },
                no_tenant_1 : { errorMessage:'', blurred:false },

                processStep: function () {
                    let id = '#step' + this.step;
                    this.inputElements = [...this.$el.querySelectorAll(id + " input[data-rules]")];
                    console.log(this.step);
                    let isValid = true;
                    let fnm = document.getElementById('fname_2').value;
                    let lnm = document.getElementById('fname_2').value;
                    if(fnm == '' && lnm == '')
                    {
                        var elements = document.querySelectorAll('.second-teanent');
                        elements.forEach((elm)=>{
                           elm.style.display = 'none';
                        });

                    }

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
