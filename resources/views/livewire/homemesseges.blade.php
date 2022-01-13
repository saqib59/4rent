<div>
    {{-- Shortcuts Card --}}
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card white-box p-0">
                <div class="card-heading border-0">
                    <h3 class="box-title mb-0">Kurzbefehle</h3>
                </div>
                <div class="card-body">
                    <a href="{{route('property.ui')}}" class="shortcut">
                        <div class="px-2 mb-2 py-2">Neues Objekt hinzufügen</div>
                    </a>
                    <a href="{{route('tenant.create')}}" class="shortcut">
                        <div class="px-2 mb-2 py-2">Neuen Mieter anlegen</div>
                    </a>
                    <a href="{{route('contract')}}" class="shortcut">
                        <div class="px-2 mb-2 py-2">Neuen Vertrag erstellen</div>
                    </a>
                    <a href="{{route('locaton')}}" class="shortcut">
                        <div class="px-2 mb-2 py-2">Objektbewertung</div>
                    </a>
                    <a href="{{route('subscribe')}}" class="shortcut">
                        <div class="px-2 mb-2 py-2">Subscribe</div>
                    </a>
                </div>
            </div>
        </div>

        {{-- New Messages Card --}}
        <div class="col-md-12 col-lg-4 col-sm-12">
            <div class="card white-box p-0 theme-border">
                <div class="card-body">
                    <h3 class="box-title mb-0">Neue Nachrichten</h3>
                </div>
                <div class="comment-widgets">
                    <!-- Message Row -->
                    <div class="d-flex flex-row comment-row p-3 m-0">
                        <div class="comment-text p-3 w-100 theme-border-black">
                            <h5 class="font-medium">James Anderson</h5>
                            <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                        </div>
                    </div>

                    <!-- Message Row -->
                    <div class="d-flex flex-row comment-row p-3 m-0">
                        <div class="comment-text p-3 active w-100 theme-border-black">
                            <h5 class="font-medium">Michael Jorden</h5>
                            <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                        </div>
                    </div>

                    <!-- Message Row -->
                    <div class="d-flex flex-row comment-row p-3 m-0">
                        <div class="comment-text p-3 w-100 theme-border-black">
                            <h5 class="font-medium">Johnathan Doeting</h5>
                            <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Vacancy Card --}}
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card white-box p-0 theme-border">
                <div class="card-heading border-0">
                    <h3 class="box-title mb-0">Leerstehend</h3>
                </div>
                <div class="card-body">
                    <ul class="chatonline">
                        <li class="theme-border-black">
                            <div class="ms-2">
                                <span class="text-dark font-bold">
                                    Following apartments are currently not matched with a tenant
                                    @foreach($empty_property as $empty)
                                        <medium class="d-block ps-3 pt-3">
                                            {{$empty->street}}, {{$empty->city}}
                                         </medium>
                                    @endforeach

                                </span>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
