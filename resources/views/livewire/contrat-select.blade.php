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
                    <label class="block font-medium text-lg text-gray-700" for="type"> Contract Create</label>
                </div>
            </div>
            <div class="card-body">
                <div class="py-4" >

                    <div class="row pt-2 justify-center bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md m-2 object">
                        <div class="col-md-12 col-lg-8 col-sm-4 text-center flex" >
                            <h5 style="padding-top: 1rem"> Chooe Tenant</h5>
                            <select name="kind" id="tenant-option"  onchange="optionChange(this.value)"
                                    style="margin-left: 3rem; max-height: 3rem"
                                    class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-black font-medium .mg-t-1">
                                <option value="Sir/Madam" selected disabled>Option</option>
                                <option value=""><a href="">Delete</a></option>
                                <option value=""><a href="">Edit</a></option>
                            </select>
                        </div>

                        <div class="col-md-12 col-lg-4 col-sm-12" style="max-height: 4rem;overflow-y: auto">
                           <p style="margin-bottom: 0">Name : Hirusha Fernando</p>
                            <p style="margin-bottom: 0">Email : hirusha@123.com</p>
                            <p style="margin-bottom: 0">Bord : 1997/05/20</p>
                            <p style="margin-bottom: 0">Name : Hirusha Fernando</p>
                            <p style="margin-bottom: 0">Email : hirusha@123.com</p>
                            <p style="margin-bottom: 0">Bord : 1997/05/20</p>

                        </div>

                    </div>
                    <div class="row pt-2 justify-center bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md m-2 object">
                        <div class="col-md-12 col-lg-8 col-sm-4 text-center flex" >
                            <h5 style="padding-top: 1rem"> Choose Object</h5>
                            <select name="kind" id="tenant-option"  onchange="optionChange(this.value)"
                                    style="margin-left: 3rem; max-height: 3rem"
                                    class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-black font-medium .mg-t-1">
                                <option value="Sir/Madam" selected disabled>Option</option>
                                <option value=""><a href="">Delete</a></option>
                                <option value=""><a href="">Edit</a></option>
                            </select>
                        </div>

                        <div class="col-md-12 col-lg-4 col-sm-12" style="max-height: 4rem;overflow-y: auto">
                            <p style="margin-bottom: 0">Street : 02</p>
                            <p style="margin-bottom: 0">zip : 10400</p>
                            <p style="margin-bottom: 0">city : moratuwa</p>
                            <p style="margin-bottom: 0">Street : 02</p>
                            <p style="margin-bottom: 0">zip : 10400</p>
                            <p style="margin-bottom: 0">city : moratuwa</p>

                        </div>

                    </div>
                    <div class="row pt-2 justify-center bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md m-2 object">
                        <div class="col-md-12 col-lg-8 col-sm-4 text-center flex" >
                            <h5 style="padding-top: 1rem"> Choose Contract</h5>
                            <select name="kind" id="tenant-option"  onchange="optionChange(this.value)"
                                    style="margin-left: 3rem; max-height: 3rem"
                                    class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-black font-medium .mg-t-1">
                                <option value="Sir/Madam" selected disabled>Option</option>
                                <option value=""><a href="">Delete</a></option>
                                <option value=""><a href="">Edit</a></option>
                            </select>
                        </div>

                        <div class="col-md-12 col-lg-4 col-sm-12" style="max-height: 4rem;overflow-y: auto">
                            <p style="margin-bottom: 0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam facilis iure iusto magnam quasi sapiente, sequi. Odio, omnis, voluptatibus?</p>

                        </div>

                    </div>


                </div>

            </div>

        </div>
    </div>
</div>

