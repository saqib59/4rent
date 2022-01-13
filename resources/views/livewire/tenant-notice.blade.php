<div class="row" >
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card white-box p-0">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card-heading pb-2">
                <div class="col-span-6 sm:col-span-6" style="border: 1px solid black;border-radius: 4px;text-align: center">
                    <label class="block font-medium text-lg text-gray-700" for="type"> {{$tenant->first_name}} {{$tenant->last_name}}</label>
                </div>
            </div>

            <div class="card-body">
                    <div class="py-4" >
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <h3 class="text-lg font-medium text-gray-900">Name : {{$tenant->first_name}}</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <h3 class="text-lg font-medium text-gray-900">Date of Birth : {{$tenant->date_of_move_in}}</h3>
                            </div>

                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <h3 class="text-lg font-medium text-gray-900">SureName :{{$tenant->last_name}}</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <h3 class="text-lg font-medium text-gray-900">ID-Number : {{$tenant->inspection_date}} </h3>
                            </div>

                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <h3 class="text-lg font-medium text-gray-900">Email : {{$tenant->email}} </h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <h3 class="text-lg font-medium text-gray-900">Street and Housenumber :  </h3>
                            </div>

                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <h5 class="text-lg font-medium text-gray-900">Telephone Number : 001123123234 </h5>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <h5 class="text-lg font-medium text-gray-900">Zip code and City : {{$tenant->zip_code}}, {{$tenant->recent_city}} </h5>
                            </div>

                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <h3 class="text-lg font-medium text-gray-900">Object affiliation :  </h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <h3 class="text-lg font-medium text-gray-900">Date of onside inspection :  </h3>
                            </div>

                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                <h3 class="text-lg font-medium text-gray-900">Start of tenancy :  </h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <h3 class="text-lg font-medium text-gray-900">Number of tenants :  </h3>
                            </div>

                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-10 col-sm-12 flex items-center">
                                <form  style="width: 100%;" action="{{route('notice.create')}}" method="post">
                                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                        <h5 class="text-lg font-medium text-gray-900">Add a Notice </h5>
                                        <div class="grid grid-cols-6 gap-6">
                                            <!-- Profile Photo -->
                                            @csrf
                                            <input type="hidden" name="tenant_id" value="{{$tenant->id}}">
                                            <div class="col-span-6 sm:col-span-6">
                                                <label class="block font-medium text-sm text-gray-700" for="body">
                                                    Description
                                                </label>
                                                <textarea style="width: 100%" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="value" @input="$emit('input', $event.target.value)" ref="input" name="body" spellcheck="false"></textarea>
                                            </div>
                                            <!-- Email -->
                                            <div class="col-span-6 sm:col-span-1">
                                                <label class="block font-medium text-sm text-gray-700" for="date">
                                                    Remind me again in
                                                </label>
                                                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="date" name="date" type="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                        <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('tNgrkdfAdwjsERLKbFAa').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class="text-sm text-gray-600 mr-3">
                                            Saved.
                                        </div>

                                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:loading.attr="disabled" wire:target="photo">
                                            Add
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center justify-content-around" style="padding-top: 4rem ;">
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center" style="padding-top: 3rem">
                                <div class="px-lg-3 sm:px-0 theme-border-black sm:rounded-tl-md sm:rounded-tr-md" style="width: 100%;height: 100%;">
                                    <h5 class="text-sm-center font-medium text-gray-900 pd-b-10" style="padding-top: 20px; ">Past Happening  </h5>
                                    <ul>
                                        <li class="li-block">
                                            <div class="bullet big">
                                                <a href = https://r4ds.had.co.nz/wrangle-intro.html>
                                                    <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false"><circle stroke = "none" cx="16" cy="16" r="10"></circle></svg>
                                                </a>
                                            </div>
                                            <ul class="pd-b-10">Payment reminder <span class="float-right" style="padding-right: 1rem" > 2021/10/05</span></ul>
                                        </li >
                                        <li class="li-block">
                                            <div class="bullet big">
                                                <a href = https://r4ds.had.co.nz/wrangle-intro.html>
                                                    <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false"><circle stroke = "none" cx="16" cy="16" r="10"></circle></svg>
                                                </a>
                                            </div>
                                            <ul class="pd-b-10">Payment reminder <span class="float-right" style="padding-right: 1rem" > 2021/10/05</span></ul>
                                        </li>
                                        <li class="li-block">
                                            <div class="bullet big">
                                                <a href = https://r4ds.had.co.nz/data-visualisation.html>
                                                    <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false"><circle stroke="none" cx="16" cy="16" r="10"></circle></svg>
                                                </a>
                                            </div>
                                            <ul class="pd-b-10">Payment reminder <span class="float-right" style="padding-right: 1rem" > 2021/10/05</span></ul>
                                        </li>
                                        <li class="li-block">
                                            <div class="bullet big">
                                                <a href = https://r4ds.had.co.nz/strings.html>
                                                    <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false"><circle stroke="none" cx="16" cy="16" r="10"></circle></svg>
                                                </a>
                                            </div>
                                            <ul class="pd-b-10">Payment reminder <span class="float-right" style="padding-right: 1rem" > 2021/10/05</span></ul>
                                        </li>
                                        <li class="li-block">
                                            <div class="bullet big">
                                                <a href = https://r4ds.had.co.nz/relational-data.html>
                                                    <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false"><circle stroke="none" cx="16" cy="16" r="10"></circle></svg>
                                                </a>
                                            </div>
                                            <ul class="pd-b-10">Payment reminder <span class="float-right" style="padding-right: 1rem" > 2021/10/05</span></ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12" style="padding-top: 3rem">
                                <div class="px-lg-3 sm:px-0 theme-border-black sm:rounded-tl-md sm:rounded-tr-md " style="width: 100%;height: 100%">
                                    <h5 class="text-sm-center font-medium text-gray-900 pd-b-10" style="padding-top: 20px">Notice Board  </h5>

                                    <div style="padding-left: 2rem">
                                        <div class="flex flex-wrap" style=" display:flex;  margin-top:auto;margin-bottom:auto;">
                                            <i class="fas fa-user-circle p-sm-2" style="font-size: 30px"></i>
                                            <div class="text">
                                                <p style="margin-bottom: 0;padding-top: 2px;text-transform:uppercase">renee mckelvey </p>
                                                <i style="color: #a1aab2;"> 25 days ago</i>
                                            </div>
                                        </div>
                                        <p style="padding-left: 1rem">Tennant was allowed to re do the paint</p>
                                    </div>
                                    <div style="padding-left: 2rem">
                                        <div class="flex flex-wrap" style=" display:flex;  margin-top:auto;margin-bottom:auto;">
                                            <i class="fas fa-user-circle p-sm-2" style="font-size: 30px"></i>
                                            <div class="text">
                                                <p style="margin-bottom: 0;padding-top: 2px;text-transform:uppercase">renee mckelvey </p>
                                                <i style="color: #a1aab2;"> 25 days ago</i>
                                            </div>
                                        </div>
                                        <p style="padding-left: 1rem">Send him letter but no reply</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row pt-2 justify-center" >
                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center"  style="padding-top: 3rem">
                                <div class="px-lg-3 sm:px-0  sm:rounded-tl-md sm:rounded-tr-md" >
                                    Rent Payment
                                    <button
                                        style="margin-left: 3rem"
                                        class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                                        Saved Version
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"  style="padding-top: 3rem">
                                <div class="px-lg-3 sm:px-0 sm:rounded-tl-md sm:rounded-tr-md" >
                                    Upload Single paperwork
                                    <button
                                        style="margin-left: 3rem"
                                        class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                                        Signed Version
                                    </button>
                                </div>
                            </div>


                        </div>

                    </div>
            </div>
        </div>
    </div>
</div>
