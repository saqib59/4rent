<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Price Atles Map') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-4">
            <div class="col-span-3 sm:col-span-2">
                <input
                    class="border-gray-300 focus:border-indigo-300 py-2 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    id="search" type="text" name="zip" placeholder="      Enter Zip Code" style="margin:20px">
                <button type="submit" id="search-button"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                        wire:loading.attr="disabled" wire:target="photo">
                    Submit
                </button>
                <button type="button" id="next-button" visibility="hidden" style="display: none;"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                        wire:loading.attr="disabled" wire:target="photo">
                    Next
                </button>

            </div>

            <div id="mymap"></div>
            <div class="container-fluid">

                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Best Suited For</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div>
                                        <p id="category"></p>
                                    </div>
                                </li>
                                <li class="ms-auto" id="score"><span class="counter text-info"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <script type="text/javascript" src="category_distance.js" ></script>
            <script>
                var marker;
                const currentMarkers = [];
                var result = []
                var map = L.map('mymap').setView([51.1642292, 10.4541194], 6);
                var geojson;
                var location_category = ["kindergarten","school", "music_school","bakery","butcher", "supermarket", "atm", "bank"];
                var population = 270000;
                var location_distance = []
                const attribution =
                    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
                const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                const tiles = L.tileLayer(tileUrl, {attribution});
                tiles.addTo(map);
                const searchInput = document.getElementById('search');


                document.getElementById('search-button').addEventListener('click', () => {
                    document.getElementById('score').innerText = "0%";
                    document.getElementById('category').innerText = "Best Suited For ";
                    const query = searchInput.value;
                    console.log(query)
                    fetch('https://nominatim.openstreetmap.org/search?format=json&polygon=1&addressdetails=1&q=' + query)
                        .then(result => result.json())
                        .then(parsedResult => {
                            let i = 0;
                          //  console.log(parsedResult);
                            if (parsedResult.length > 0) {
                                document.getElementById("next-button").style.display = "inline";
                            }else{
                                document.getElementById("next-button").style.display = "none";
                            }
                            result =parsedResult;
                            add_single_marker(result[i])
                            document.getElementById("next-button").addEventListener('click',()=>{
                                document.getElementById('score').innerText = '0%';
                                document.getElementById('category').innerText = ' Calculation...';
                                i++;
                                if(i >parsedResult.length-1 )
                                    i = 0
                                add_single_marker(result[i])
                            })

                           // map.removeLayer(marker);
                        });
                    //send_data()
                   // console.log(location_distance)
                    // setTimeout(function() {
                    //
                    // }, 3000);

                });


                function add_single_marker(marker_location){
                    location_distance =[]
                    // const population_pomis = get_population(marker_location['osm_id'])
                    // population_pomis
                    //     .then(result=>{
                    //         population=result
                    //     })
                    // //
                    if (typeof(marker) !== "undefined")
                        map.removeLayer(marker)
                    var marker_location = new L.LatLng(marker_location.lat, marker_location.lon);
                    marker = new L.marker(marker_location).addTo(map);
                    map.flyTo(marker_location, 10);

                    // for (var j =0 ; j< location_category.length ;j++)
                    // {
                    //     var categoty =location_category[j]
                    //
                    //     var location = getAsync(categoty,marker_location.lat, marker_location.lng)
                    //     location
                    //         .then((response) => {
                    //             // console.log(response);
                    //              if(response.length != 0)
                    //              {
                    //                  var distance = getDistanceFromLatLonInKm(marker_location.lat, marker_location.lng , response[0].lat, response[0].lon)
                    //                  location_distance.push(distance);
                    //              }else {
                    //                  location_distance.push(-1);
                    //              }
                    //
                    //         }).finally();
                    // }
                    var score = getScore();
                    score.then(data=>{
                      //  console.log(data);
                        document.getElementById('score').innerText = (data['score']/10000)*100 +'%';
                        document.getElementById('category').innerText = data['category_name'];
                    });
                    //console.log(send_data())

                }


                function send_data()
                {
                    var xmlHttp = new XMLHttpRequest();
                    xmlHttp.open( "GET", "{{route('test')}}", false ); // false for synchronous request
                    xmlHttp.send( null );
                    return xmlHttp.responseText;
                }

                function get_po(osm_id)
                {
                    const data =get_population(osm_id)
                    data.then(
                        result=>{
                            return result;
                        }
                    )
                }


                async function get_population(osm_id)
                {
                   const response =await fetch('https://nominatim.openstreetmap.org/details.php?osmtype=N&osmid='+osm_id+'&class=place&addressdetails=1&hierarchy=0&group_hierarchy=1&format=json');
                    var data = await response.json();
                    return (data['extratags']['population'])

                }

                async function getAsync(product,lat, lng) {
                    const response =await  fetch("https://nominatim.openstreetmap.org/search.php?q="+product+"+in+%5B" + lat + "," + lng + "&format=jsonv2&limit=1");
                    var data =await  response.json();
                    return data
                }
                async function getScore() {
                    const response =await  fetch("/test");
                    var data =await  response.json();
                    return data
                }

                function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
                   // console.log(lat1, lon1, lat2, lon2)
                    var R = 6371; // Radius of the earth in km
                    var dLat = deg2rad(lat2 - lat1);  // deg2rad below
                    var dLon = deg2rad(lon2 - lon1);
                    var a =
                        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                        Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
                        Math.sin(dLon / 2) * Math.sin(dLon / 2)
                    ;
                    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                    var d = R * c; // Distance in km
                    return d;
                }


                function deg2rad(deg) {
                    return deg * (Math.PI / 180)
                }
            </script>

        </div>
    </div>
</x-app-layout>

