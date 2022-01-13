<div class="row" >
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card white-box p-0">
            <div class="card-heading pb-2">
                <div class="col-span-6 sm:col-span-6" style="border: 1px solid black;border-radius: 4px;text-align: center">
                    <label class="block font-medium text-lg text-gray-700" for="type">Location score</label>
                </div>
            </div>

            <div class="card-body">
                <div class="py-4" >
                    <div class="row pt-2 justify-center">
                        <section >
                            <ul class="tabs">
                                <li class="active">Location Map</li>
                                <li>Street view</li>
                                <li>Score</li>
                                <li>About</li>
                                <li>Recidental type</li>
                            </ul>

                            <ul class="tab__content">
                                <li class="active">
                                    <div class="content__wrapper">
                                        <div class="col-span-3 sm:col-span-2">
                                            <input
                                                class="border-gray-300 focus:border-indigo-300 py-2 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                id="search" type="text" name="zip" placeholder="      Search" style="margin:20px">
                                            {{--<button type="submit" id="search-button"--}}
                                            {{--class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"--}}
                                            {{--wire:loading.attr="disabled" wire:target="photo">--}}
                                            {{--Submit--}}
                                            {{--</button>--}}
                                            {{--<button type="button" id="next-button" visibility="hidden" style="display: none;"--}}
                                                    {{--class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"--}}
                                                    {{--wire:loading.attr="disabled" wire:target="photo">--}}
                                                {{--Next--}}
                                            {{--</button>--}}

                                        </div>
                                        <div id="mymap"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content__wrapper">
                                        <h2 class="text-color">Street view</h2>
                                        <div id="pano"></div>

                                    </div>
                                </li>
                                <li>
                                    <div class="content__wrapper">
                                        <div class="row pt-2 justify-center">
                                            <div class="col-md-12 col-lg-4 col-sm-12 flex items-center">
                                                <h3 class="text-lg font-medium text-gray-900">Best Suited For </h3>

                                            </div>
                                        </div>
                                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                                            <li> <div class="pos" style="position: relative" >
                                                    <section class="loaders loaders-bg-4" id="loader" style="display: none"><span class="loader loader-bars"><span> </span></span> Calculating...</section>
                                                    <span> <p id="category" class="category">No location select</p></span>
                                                </div></li>
                                            <li>
                                                <div class="wrapper">
                                                    <div id="score-circle" class="c100 p1 blue">
                                                        <span id="score">0%</span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                        <div class="row pt-2 justify-center">
                                            <ul class="list-inline two-part d-flex align-items-center mb-0 custom-boarder pd-t-10">
                                                <li><i class="fas fa-cart-arrow-down custom-icon pd-l-10" aria-hidden="true"></i></li>
                                                <li class="pd-l-10">
                                                    <div>

                                                        <h3 class="box-title">Supermarket</h3>
                                                    </div>
                                                </li>
                                                <li class="ms-auto"><span class="counter text-info pd-r-10 pd-t-10" id="supermaket">0m</span>
                                                </li>
                                            </ul>
                                            <ul class="list-inline two-part d-flex align-items-center mb-0 custom-boarder pd-t-10">
                                                <li><i class="fa fa-globe custom-icon pd-l-10" aria-hidden="true"></i></li>
                                                <li class="pd-l-10">
                                                    <div>

                                                        <h3 class="box-title">School</h3>
                                                    </div>
                                                </li>
                                                <li class="ms-auto" ><span class="counter text-info pd-r-10" id="school">0m</span>
                                                </li>
                                            </ul>
                                            <ul class="list-inline two-part d-flex align-items-center mb-0 custom-boarder pd-t-10">
                                                <li><i class=" fas fa-bus custom-icon pd-l-10" aria-hidden="true"></i></li>
                                                <li class="pd-l-10">
                                                    <div>

                                                        <h3 class="box-title">Public Transport</h3>
                                                    </div>
                                                </li>
                                                <li class="ms-auto" ><span class="counter text-info pd-r-10" id="trasport">0m</span>
                                                </li>
                                            </ul>
                                            <ul class="list-inline two-part d-flex align-items-center mb-0 custom-boarder pd-t-10">
                                                <li><i class="fas fa-seedling custom-icon pd-l-10" aria-hidden="true"></i></li>
                                                <li class="pd-l-10">
                                                    <div>

                                                        <h3 class="box-title">Park</h3>
                                                    </div>
                                                </li>
                                                <li class="ms-auto"><span class="counter text-info pd-r-10"  id="park">0m</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content__wrapper">
                                        <div class="row pt-2 justify-center">
                                            <div class="col-md-12 col-lg-12 col-sm-12 flex items-center">
                                                <h1 class="box-title" style="background-color: #4394e6; width: 100%;">Learn more about the location score</h1>

                                            </div>
                                        </div>
                                        <div class="row pt-2 justify-center">
                                            <div class="col-md-12 col-lg-12 col-sm-12 flex items-center">
                                                <p style="padding: 7px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque error facilis illum recusandae sint. Accusamus deleniti, deserunt! Aut blanditiis cupiditate dolore dolores error illo impedit ipsa iste laboriosam laborum modi molestiae molestias nobis perferendis, quidem quis quisquam ratione rem repellendus sit suscipit totam ut. Delectus doloremque esse explicabo mollitia pariatur quasi quos tempore ullam. A aliquam dolores hic illo ipsam magni odit vel. Accusantium beatae eveniet exercitationem explicabo fugiat illum, itaque magni maiores molestias non pariatur perferendis, quae quaerat quidem, quisquam sint tempore velit voluptate. Delectus dolor fugiat nostrum perspiciatis. A aspernatur culpa est fuga labore libero quia temporibus. Ducimus eius eos illo ipsam natus nostrum nulla omnis, recusandae tempora voluptate. Amet asperiores beatae commodi cum debitis deleniti distinctio eius error eum eveniet explicabo fugiat id impedit, inventore ipsa laboriosam magnam molestias mollitia nam nesciunt nisi non officia provident quo repellat repellendus tempora temporibus tenetur vitae voluptatibus! Aliquam corporis illo quas ratione, repellat suscipit? Autem cum doloremque ea eius exercitationem fuga fugiat iste, iure laboriosam, nemo quasi, rem tempore. Dicta in laudantium mollitia nobis perspiciatis quibusdam repellendus. Cumque esse qui saepe tempore temporibus vel, vitae. Asperiores est ex explicabo molestiae mollitia, nam quidem. Accusamus esse, minima nam nihil quos repellat?</p>


                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content__wrapper">
                                        <section>
                                            <ul class="low_tabs">
                                                <li class="low_active">Families</li>
                                                <li>Students</li>
                                                <li>Retired People</li>
                                                <li>Singles</li>
                                                <li>AirBNB</li>
                                            </ul>

                                            <ul class="low_tab__content">
                                                <li class="active">
                                                    <div class="content__wrapper">
                                                        <h2 class="text-color">Families</h2>
                                                        <div class="wrapper">
                                                            <div id="score-circle" class="c100 p1 blue">
                                                                <span id="score">0%</span>
                                                                <div class="slice">
                                                                    <div class="bar"></div>
                                                                    <div class="fill"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="pd-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam blanditiis cumque, cupiditate doloremque ea eligendi error eum ex, excepturi facilis fugit impedit inventore iste, molestiae necessitatibus odio officiis perspiciatis quisquam reiciendis repellendus repudiandae similique tempora temporibus ut vel veniam voluptate? A corporis cupiditate dicta illo, ipsum iste libero minima numquam repudiandae sed tenetur velit, veritatis, voluptatem voluptatibus voluptatum. Assumenda autem delectus, dolor eligendi esse et exercitationem, incidunt maiores molestiae, nesciunt perspiciatis porro provident quibusdam recusandae sunt velit vitae. Accusantium, dicta dolorem doloribus minima neque perferendis quidem. Debitis expedita id impedit iure nemo vero voluptatum. Ad asperiores enim excepturi facilis?</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content__wrapper">
                                                        <h2 class="text-color">Residental Type 02</h2>
                                                        <p class="pd-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, fuga!</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content__wrapper">
                                                        <h2 class="text-color">Residental Type 03</h2>
                                                        <p class="pd-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium ad alias cum, dignissimos, distinctio eligendi enim est nisi nobis soluta. Aliquam animi atque consectetur consequatur cum cupiditate delectus deserunt fugiat id, iusto maxime minus modi mollitia non officiis placeat ratione rem reprehenderit repudiandae sed sequi sint sunt tempora?
                                                        </p>

                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content__wrapper">
                                                        <h2 class="text-color">Residental Type 04</h2>
                                                        <p class="pd-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet aut doloribus facilis fugiat harum iure maiores nulla, optio perferendis perspiciatis saepe, sint ullam.</p>

                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="content__wrapper">
                                                        <h2 class="text-color">Residental Type 05</h2>
                                                        <p class="pd-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aperiam consectetur delectus dolor ea eaque eius, eos exercitationem facere illo impedit iusto laboriosam libero minima neque officia optio perspiciatis quaerat quas quod repudiandae voluptatem voluptatibus. Ipsam!    </p>

                                                    </div>
                                                </li>
                                            </ul>
                                        </section>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


@section('js')
    <script>
        function initMap() {
            const fenway = { lat: 42.345573, lng: -71.098326 };
            var centerCoordinates = new google.maps.LatLng(51.1642292, 10.4541194,7);
            var map = new google.maps.Map(document.getElementById('mymap'), {
                center : centerCoordinates,
                zoom : 6
            });

            var card = document.getElementById('pac-card');
            var input = document.getElementById('search');
            var infowindowContent = document.getElementById('infowindow-content');

            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

            var autocomplete = new google.maps.places.Autocomplete(input);
            // var infowindow = new google.maps.InfoWindow();
            // infowindow.setContent(infowindowContent);

            var marker = new google.maps.Marker({
                map : map
            });

            autocomplete.addListener('place_changed',function() {
               // document.getElementById('next-button').style.display = 'inline';
                //document.getElementById("location-error").style.display = 'none';
                marker.setVisible(false);
                var place = autocomplete.getPlace();

                var locations = get_location_distance(place)
                locations.then(data=>{
                        document.getElementById('supermaket').innerText = Math.round(data['supermarket'])+ 'm';
                        document.getElementById('school').innerText = Math.round(data['school'])+ 'm';
                        document.getElementById('trasport').innerText = Math.round(data['public_transport'])+ 'm';
                        document.getElementById('park').innerText = Math.round(data['park']) + 'm';
                })
                var score = getScore(place);
                document.getElementById('loader').style.display = "contents";
                document.getElementById('score').innerText = '..';
                document.getElementById('category').style.display = 'none';
                score
                    .then(data=>{
                     console.log(data);
                     alert('Score was calculated');
                    var score = (data['score']/10000)*100;
                    var score_class = 'p'+score;
                    document.getElementById('loader').style.display = "none";
                    document.getElementById('category').style.display = 'flex';
                    document.getElementById('score-circle').classList.remove("p1");
                    document.getElementById('score-circle').classList.add(score_class);
                    document.getElementById('score').innerText =Math.round(score)  + '%';
                    document.getElementById('category').innerText = data['category_name'];

                })
                    .catch(err=>{
                        document.getElementById('loader').style.display = "none";
                        document.getElementById('category').style.display = 'flex';
                        document.getElementById('score').innerText = '0%';
                    })

                // infowindow.close();

                // if (!place.geometry) {
                //     document.getElementById("location-error").style.display = 'inline-block';
                //     document.getElementById("location-error").innerHTML = "Cannot Locate '" + input.value + "' on map";
                //     return;
                // }
                const panorama = new google.maps.StreetViewPanorama(
                    document.getElementById("pano"),
                    {
                        position: place.geometry.location,
                        pov: {
                            heading: 34,
                            pitch: 10,
                        },
                    }
                );
                map.setStreetView(panorama);
                map.fitBounds(place.geometry.viewport);
                map.setZoom(17);
                map.panTo(place.geometry.location);
                console.log(place.geometry.location.lat())
                console.log(place.geometry.location.lng())
                //map.panTo(marker.position);
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

                // infowindowContent.children['place-icon'].src = place.icon;
                // infowindowContent.children['place-name'].textContent = place.name;
                // infowindowContent.children['place-address'].textContent = input.value;
                // infowindow.open(map, marker);
              // var data =  get_location_distance('supermarket');
              // for(var i=0;i<5;i++)
              // {
              //     console.log(data[i])
              // }


            });

            async function getScore(place) {

                var url =encodeURI(input.value);
                //const response =await  fetch("/api/loc?lat="+place.geometry.location.lat()+"&lon="+place.geometry.location.lng() );
                console.log(url);
                const response =await  fetch("/api/loc?address="+url);
                var data =await  response.json();
                return data
            }

            async function get_location_distance(place){
                var url = input.value.split(",")[0];
                const response =await  fetch("/api/get_5_loc?lat="+place.geometry.location.lat()+"&lng="+place.geometry.location.lng() );
                var data =await  response.json();
                return data
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlQfKzh8Fq3ljh4usZZU7Kjl-OnZXdY_w&callback=initMap&libraries=places"></script>
@endsection
