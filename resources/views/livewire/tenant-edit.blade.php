<div class="row" >
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card white-box p-0">
            <div class="card-heading pb-2">
                <h3 class="box-title mb-0">Update User Profile</h3>
            </div>

            <div class="card-body">
                {{-- --}}
                <form action="{{route('tenant.update')}}" id="create_property" method="post">
                    {{-- Step 1 --}}
                    @csrf
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <input  value="{{$tenant->id}}" type="hidden" name="id"
                           id="rehouse_1">
                    <div class="py-4" id="step1" x-show.transition.in="step === 1">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="type_1">Title</label>
                                <select name="type_1"
                                        class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="Sir/Madam" selected disabled>Herr/ Frau</option>
                                    <option value="Sir">Herr</option>
                                    <option value="Madam">Frau</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="fname_i">First Name</label>
                                <input placeholder="{{$tenant->first_name}}" value="{{$tenant->first_name}}" type="text" name="fname_1" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="fname_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12 ">
                                <label for="lname_1">Last Name</label>
                                <input placeholder="{{$tenant->last_name}}" value="{{$tenant->last_name}}" type="text" name="lname_1" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="lname_1">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 ">
                                <label for="rehouse_1">House Number</label>
                                <input placeholder="{{$tenant->house_number}}" value="{{$tenant->house_number}}" type="text" name="rehouse_1"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="rehouse_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="city_1">City</label>
                                <input placeholder="{{$tenant->recent_city}}" value="{{$tenant->recent_city}}" type="text" name="city_1"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="city_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="zipcode_1">Zip Code</label>
                                <input placeholder="{{$tenant->zip_code}}" value="{{$tenant->zip_code}}" type="text" name="zipcode_1"
                                       data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="zipcode_1">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="email_1">Email</label>
                                <input placeholder="{{$tenant->email}}" value="{{$tenant->email}}" name="email_1" type="email" data-rules='["required"]'
                                       @blur="blur" @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="email_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="tp_1">Telephone</label>
                                <input placeholder="{{$tenant->tp}}" value="{{$tenant->tp}}" name="tp_1" type="text" data-rules='["required"]'
                                       @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="tp_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="nic_1">ID</label>
                                <input placeholder="{{$tenant->nic}}" value="{{$tenant->nic}}" name="nic_1" type="text"
                                       data-rules='["required"]' @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="nic_1">
                            </div>
                        </div>
                        <div class="row pt-2" >
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="dob_1">Date of birth</label>
                                <input
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    type="text" name="dob_1" id="dob_1" placeholder="Date Of Birth" onclick="dob_val()"  onfocus="(this.type='date')">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="no_tenant_1">Number of Tenant</label>
                                <input placeholder="{{$tenant->no_of_tenant}}" value="{{$tenant->no_of_tenant}}" name="no_tenant_1" type="text"
                                       data-rules='["required"]' @blur="blur"
                                       @input="input"
                                       class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                       id="no_tenant_1">
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="date_move_1">Date Of Move in</label>
                                <input
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    type="text" name="date_move_1" id="date_move_1" placeholder="Date Of Move in" onclick="move_in()"
                                    onfocus="(this.type='date')">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="obj_1">Property</label>
                                <select
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="obj1" name="obj_1" value="{{$tenant->property_id}}" selected disabled>Objekt 1:(Hahnstra)</option>
                                    {{--@foreach($property as $prop)--}}
                                    {{--<option value="{{$prop->id}}" selected disabled>{{$prop->name}}</option>--}}
                                    {{--@endforeach--}}
                                </select>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <label for="inspection_1">Date of Inspection</label>
                                <input
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                    type="text" name="inspection_1" id="inspection_1" onclick="inspection()" placeholder="Zeitpunkt der Ortsbesichtigung"
                                    onfocus="(this.type='date')">
                            </div>
                        </div>

                    </div>
                    <div class="py-5">
                        <div class="row justify-center">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-6 col-xs-12 flex items-center">

                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-6 col-xs-12 flex items-center justify-end">

                                <input
                                    type="submit"
                                    id="teanetSubmitButton"
                                    class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-center text-white bg-green-500 hover:bg-green-600 font-medium">


                            </div>
                        </div>
                    </div>

                </form>
                {{-- Wizard Navigations --}}


            </div>
        </div>
    </div>
</div>
{{--value=""--}}
@section('js')
    <script>

        function  dob_val() {
            console.log("asd")
            document.getElementById('dob_1').value ='{{$tenant->dob}}'
        }
        function  inspection() {
            document.getElementById('inspection_1').value ='{{$tenant->inspection_date}}'
        }
        function  move_in() {
            document.getElementById('date_move_1').value ='{{$tenant->date_of_move_in}}'
        }

        {{--function tenant() {--}}
            {{--var tenanetForm = document.querySelector('#create_property');--}}
            {{--return {--}}
                {{--step: 1,--}}
                {{--fname_1 : { errorMessage:'', blurred:false },--}}
                {{--lname_1 : { errorMessage:'', blurred:false },--}}
                {{--rehouse_1 : { errorMessage:'', blurred:false },--}}
                {{--city_1 : { errorMessage:'', blurred:false },--}}
                {{--zipcode_1 : { errorMessage:'', blurred:false },--}}
                {{--email_1 : { errorMessage:'', blurred:false },--}}
                {{--tp_1 : { errorMessage:'', blurred:false },--}}
                {{--nic_1 : { errorMessage:'', blurred:false },--}}
                {{--dob_1 : { errorMessage:'', blurred:false },--}}
                {{--date_move_1 : { errorMessage:'', blurred:false },--}}
                {{--inspection_1 : { errorMessage:'', blurred:false },--}}
                {{--no_tenant_1 : { errorMessage:'', blurred:false },--}}

                {{--processStep: function () {--}}
                    {{--let id = '#step' + this.step;--}}
                    {{--this.inputElements = [...this.$el.querySelectorAll(id + " input[data-rules]")];--}}
                    {{--console.log(this.step);--}}
                    {{--let isValid = true;--}}
                    {{--let fnm = document.getElementById('fname_2').value;--}}
                    {{--let lnm = document.getElementById('fname_2').value;--}}
                    {{--if(fnm == '' && lnm == '')--}}
                    {{--{--}}
                        {{--var elements = document.querySelectorAll('.second-teanent');--}}
                        {{--elements.forEach((elm)=>{--}}
                            {{--elm.style.display = 'none';--}}
                        {{--});--}}

                    {{--}--}}

                    {{--this.inputElements.map((input) => {--}}
                        {{--if (Iodine.is(input.value, JSON.parse(input.dataset.rules)) !== true) {--}}
                            {{--const error = Iodine.is(input.value, JSON.parse(input.dataset.rules));--}}

                            {{--input.classList.add("border-red-500");--}}
                            {{--this[input.name].errorMessage = Iodine.getErrorMessage(error);--}}
                            {{--this[input.name].blurred = true;--}}

                            {{--isValid = false;--}}
                        {{--} else {--}}
                            {{--input.classList.remove("border-red-500");--}}
                            {{--this[input.name].errorMessage = "";--}}
                        {{--}--}}
                    {{--});--}}

                    {{--if (isValid) {--}}
                        {{--this.step++;--}}
                    {{--}--}}
                {{--},--}}

                {{--blur: function(event) {--}}
                    {{--let ele = event.target;--}}
                    {{--this[ele.name].blurred = true;--}}
                    {{--let rules = JSON.parse(ele.dataset.rules)--}}
                    {{--this[ele.name].errorMessage = this.getErrorMessage(ele, rules);--}}
                {{--},--}}

                {{--input: function(event) {--}}
                    {{--let ele = event.target;--}}
                    {{--let rules = JSON.parse(ele.dataset.rules)--}}
                    {{--this[ele.name].errorMessage = this.getErrorMessage(ele, rules);--}}
                {{--},--}}
                {{--getErrorMessage: function(input, rules){--}}
                    {{--let isValid = Iodine.is(input.value, rules);--}}

                    {{--if (isValid !== true) {--}}
                        {{--input.classList.add("border-red-500");--}}
                        {{--return Iodine.getErrorMessage(isValid);--}}
                    {{--}--}}

                    {{--input.classList.remove("border-red-500");--}}
                    {{--return '';--}}
                {{--},--}}

                {{--submitForm: function () {--}}
                    {{--tenanetForm.submit();--}}
                {{--}--}}
            {{--}--}}
        {{--}--}}


    </script>
@endsection
