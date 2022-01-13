<div class="row" >
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card white-box p-0">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card-heading pb-2">
                <div class="col-span-6 sm:col-span-6 border-2" style="text-align: center">
                    <label class="block font-medium text-lg text-gray-700" for="type"> Property List</label>
                </div>
            </div>
            <div class="card-body">
                <div class="py-4" >
                    <div class="row pt-2 justify-center">
                        <div class="col-md-12 col-lg-8 col-sm-12 pd-10 pd-t-10">
                            <select name="kind" onchange="typeFilter(this.value)"
                                    class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                <option value="Sir/Madam" selected disabled>Object Kind</option>
                                @foreach($types as $prop)
                                    <option value="{{$prop->object_type}}">Type {{$prop->object_type}}</option>
                                @endforeach
                                <option value="0">All</option>

                            </select>
                        </div>

                        <div class="col-md-12 col-lg-4 col-sm-12">
                            <select name="kind"
                                    style="margin-left: 3rem;display: none"
                                    class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center font-medium">
                                <option value="Sir/Madam" selected disabled>Object Kind</option>
                                <option value="Sir">Type 01</option>
                            </select>
                            <a href="{{route('property.ui')}}"
                               style="margin-left: 3rem"
                               class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-black text-center font-medium">
                                Add A new Property
                            </a>
                        </div>

                    </div>
                </div>
                <div class="py-4" >
                    @foreach($property as $prop)
                        <div class="row pt-2 justify-center bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md m-2 object" data-type="{{$prop->object_type}}">
                            <div class="col-md-12 col-lg-8 col-sm-4 text-center" >
                                <h5 style="padding-top: 1rem"> {{$prop->name}}</h5>
                            </div>

                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <a href="{{route('property.profile',$prop->id)}}"
                                   style="margin-left: 3rem"
                                   class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-center text-black font-medium .mg-t-1">
                                    See Profile
                                </a>
                                <select name="kind" id="tenant-option"  onchange="optionChange(this.value)"
                                        style="margin-left: 3rem"
                                        class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-black font-medium .mg-t-1">
                                    <option value="Sir/Madam" selected disabled>Option</option>
                                    <option value="delete_{{$prop->id}}"><a href="">Delete</a></option>
                                    <option value="edit_{{$prop->id}}"><a href="">Edit</a></option>
                                </select>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>

@section('js')
    <script>
        function typeFilter(id) {

            var elements = document.querySelectorAll('.object');
            elements.forEach(element =>{
                if(id == 0)
                {
                    element.style.display = 'flex';
                }
               else if(element.dataset.type == id)
               {
                   element.style.display = 'flex';
                  // console.log(id);

               }else{
                   element.style.display = 'none';
               }
            });
        }

        function optionChange(val){
            var option_arr = val.split('_');
            if(option_arr[0] == 'delete')
            {
                // delete user
                if(confirm("Do you Wanna delete this Property"))
                {
                    window.location.href = "/property/delete/"+ option_arr[1];


                }

            }
            if(option_arr[0] == 'edit')
            {
                // edit user
                window.location.href = "/property/edit/"+ option_arr[1]

            }


        }



    </script>
@endsection
