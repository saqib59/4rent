<?php

namespace App\Http\Controllers;

use App\Models\DistanceScore;
use App\Models\LocationCategory;
use App\Models\LocationObject;
use App\Models\LocationResult;
use GuzzleHttp\Exception\RequestException;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function retive()
    {
        $data= LocationCategory::withTrashed()->get();
        return $data;
        //return view('map', ['category' => $data]);

    }
    public function score_api($place)
    {
        return response()->json([
            'place' => $place,
            'state' => 'CA',
            'postal_code' => '10400',
            'distance' => [
                'school' => '735',
                'kindergarten' => '300',
                'music_school' => '400',
                'bakery' => '280',
                'butcher' => '510',
                'supermarket' => '510',
                'atm' => '510',
                'post_office' => '987',
                'post_box' => '987',
            ],
            'population' => '20700',
            'score' => [
                'family' => '1000000',
                '1-2P' => '270000',
                'student' => '540000',
                'Senioren' => '60000',
                'Einzelhandel' => '700000',
                'Büros' => '120000',
                'Airbnb' => '600000',
                'Fabriken' => '300000',

            ]
        ]);
    }


    public function get_score()
    {

        $Object_list = array();
        $ne_object_list = [
            "aerodrome" => 5266.7980873741,
  "tram_stop" => 20000,
  "charging_station" => 20000,
  "fuel" => 264.59114113084,
  "station" => 98.67817550223,
  "stop_position" => 20000,
  "stop_area" => 20000,
  "mall" => 2417.965814116,
  "department_store" => 20000,
  "clothes" => 20000,
  "hairdresser" => 1331.6758157169,
  "pub" => 2168.7034905708,
  "bar" => 2168.7034905708,
  "nightclub" => 20000,
  "gambling" => 20000,
  "casino" => 6997.5907580914,
  "brothel" => 20000,
  "biergarten" => 20000,
  "cafe" => 1589.3278409559,
  "restaurant" => 377.99868678415,
  "ice_cream" => 20000,
  "hospital" => 1106.9654969905,
  "clinic" => 2126.7180718185,
  "doctors" => 3826.3756715867,
  "pharmacy" => 5331.3883950573,
  "golf" => 20000,
  "dance" => 20000,
  "horse_riding" => 20000,
  "sports_centre" => 20000,
  "theme_park" => 20000,
  "cinema" => 1035.0414950431,
  "swimming" => 20000,
  "track" => 2633.8073747866,
  "recreation_ground" => 20000,
  "nature_reserve" => 20000,
  "water" => 1681.3190942145,
  "fitness_centre" => 20000,
  "park" => 519.27001038615,
  "playground" => 2448.7003562736,
  "marketplace" => 3966.3515975062,
  "bank" => 501.47707917468,
  "kiosk" => 20000,
  "post_office" => 20000,
  "atm" => 5370.4675859767,
  "supermarket" => 323.99279981297,
  "butcher" => 6407.9826623516,
  "bakery" => 2524.9366760698,
  "post_box" => 20000,
  "music_school" => 20000,
  "school" => 270.54609569868,
  "kindergarten" => 10103.982534222,
  "convenience" => 20000,
  "deli" => 20000,
  "fishing" => 20000,
  "hotel" => 423.81823967544,
  "hostel" => 2582.8128646241,
  "stop_area(alles)" => 20000,
  "library" => 2538.1919666647,
  "college" => 868.54240360013,
  "university" => 3242.1260326939,
  "copyshop" => 20000,
  "ice_rink" => 20000,
  "food_court" => 20000,
  "museum" => 5638.8348402152,
  "golf_course" => 20000,
  "hearing_aids" => 20000,
  "townhall" => 20000,
  "caravan_site" => 20000,
  "motel" => 7622.5815253296,
  "recycling" => 20000,
  "waste_disposal" => 20000,
  "electrical" => 20000,
  "electronics" => 20000,
  "fire_station" => 20000,
  "police" => 3295.9232969466,
  "ferry_terminal" => 20000,
        ];
        $population = 20000;
        $score_list = array();
       // $category= LocationCategory::where('name','family')->first();
        //
        $location_obj = $this->get_location_osm_id('moratuwa');
        $lat = $location_obj[0]['lat'];
        $lon = $location_obj[0]['lon'];
        $score = 0;
        //dd($object);
        //
        $cat= LocationCategory::where('min_val','<',$population)->where('max_val','>=',$population)->get()->all();
        for($i =0; $i <count($cat); $i++)
        {
            $special_obj = ['station','stop_position','stop_area'];
            $special_obj_added_to_score = 0;
            $score_list[$cat[$i]->id] = 0;
            $category_id = $cat[$i]->id;
            $locations = LocationObject::where('loc_cat_id',$category_id)->get()->all();
           // var_dump($category_id);

            for($j = 0; $j< count($locations); $j++)
            {
                $object = $locations[$j]->type;
                $distance_cat = DistanceScore::where('cat_id',$locations[$j]->loc_cat_distance_id)->get()->first();

               // dd($locations[$j]);
//                if (!array_key_exists($object,$Object_list))
//                {
//                    var_dump($object);
//                    $object_obj = $this->get_nearest_location($object,$lat, $lon);
//                    if(count($object_obj) == 1)
//                    {
//                        $obj_lat = $object_obj[0]['lat'];
//                        $obj_lon = $object_obj[0]['lon'];
//                        $distance =$this->calculate_distance($lat,$lon,$obj_lat,$obj_lon);
//                        $Object_list[$object] =  $distance;
//                    }else{
//                        $Object_list[$object] =  20000;
//                    }
//
//                }
                if(in_array($object, $special_obj)){
                    if($special_obj_added_to_score == 0)
                    {
                        continue;
                    }
                    $special_obj_added_to_score = 1;
                   // var_dump($object);
                }
                $distance = $ne_object_list[$object];
                if($distance < $distance_cat->distance_1)
                {
                    $score_list[$cat[$i]->id] =  $score_list[$cat[$i]->id] +$locations[$j]->score_1;
                    //dd("distance_1 ".$distance.' '.$distance_cat->distance_1.' '.$object.' '.$category_id);
                }
                else if($distance < $distance_cat->distance_2)
                {
                    $score_list[$cat[$i]->id] =  $score_list[$cat[$i]->id] +$locations[$j]->score_2;
                    //dd("distance_2 ".$distance.' '.$distance_cat->distance_1.' '.$object.' '.$category_id);
                }
                else if($distance < $distance_cat->distance_3)
                {
                    $score_list[$cat[$i]->id] =  $score_list[$cat[$i]->id] +$locations[$j]->score_3;
                    // dd("distance_3");
                }
                else
                {
                    $score_list[$cat[$i]->id] =  $score_list[$cat[$i]->id] +$locations[$j]->score_4;
                    //  dd("distance_4");
                }

            }

           // break;
        }
        //
        $hiesht_score =array_search(max($score_list), $score_list);
        $hiesht_score_category = LocationCategory::where('id',$hiesht_score)->get()->first();
        //dd($hiesht_score_category->name);
        $final_value_list = [
          'score' =>   $score_list[$hiesht_score],
           'category_name' => $hiesht_score_category->name,
            'distance' =>[
                'supermarket' => $ne_object_list['supermarket'],
                'school' =>$ne_object_list['school'],
                'public_trasport' => $ne_object_list['station'],
                'park' => $ne_object_list['park']
            ]
        ];

        return $final_value_list;
        //dd($final_value_list);
       // dd($score_list);
       // return $cat;

    }

    public function get_location_osm_id($location)
    {
       // dd(urlencode($location));
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $url =  'https://nominatim.openstreetmap.org/search?X-Requested-With=overpass-ide&format=json&q='.$location;
        //$url = "https://nominatim.openstreetmap.org/search?X-Requested-With=overpass-ide&format=json&q=Kirchenstra%C3%9Fe%2062%2C%2066909%20Herschweiler-Pettersheim";
        $request = $client->get($url);
        $request_code = $request->getStatusCode();
        
        if($request_code == '200')
        {
            $response =$request->getBody()->getContents();
            $response = json_decode($response, true);
            // dd($location);
            return $response;
        }
        else{
            return "";
        }


    }

    public function create_json()
    {
        // Create token header as a JSON string
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

// Create token payload as a JSON string
        $payload = json_encode(['user_id' => 123]);
        // Encode Header to Base64Url String
        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

// Encode Payload to Base64Url String
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));
        // Create Signature Hash
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'abC123!', true);
        // Encode Signature to Base64Url String
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
        // Create JWT
        $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;


        return $jwt;
    }

    public function  api_score(\Illuminate\Http\Request $request)
    {
        $auth = $request->header('Authorization');
        if($auth)
        {
            return $this->get_score();
        }
        return response("Auth required",401);

    }

    public function get_nearest_location($object,$lat,$lon)
    {
        //var_dump($lat,$lon);
//        $object = 'school';
        
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('https://nominatim.openstreetmap.org/search.php?q='.$object.'+near'.$lat.','.$lon.'&format=jsonv2&limit=1');
        $response =$request->getBody()->getContents();

        $response = json_decode($response, true);

        return $response;
    }
    function calculate_distance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
    {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocationCategory  $locationCategory
     * @return \Illuminate\Http\Response
     */
    public function show(LocationCategory $locationCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocationCategory  $locationCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(LocationCategory $locationCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocationCategory  $locationCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocationCategory $locationCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocationCategory  $locationCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocationCategory $locationCategory)
    {
        //
    }
    function api(Request $request){
        $list = [];
        $time = time();
        
       // $ss = 'Kirchenstraße 62, 66909 Herschweiler-Pettersheim';
        $location_obj = $this->get_location_osm_id($request->address);
        //check location in database
       
        $is_location_has = LocationResult::where('lat',$location_obj[0]['lat'])->get()->first();
        
        if($is_location_has == null)
        {
         //   dd($request->lat);
           // $location_data = $this->getLocationData($request->lat,$request->lon);
            
            $lat = $location_obj[0]['lat'];
            $lon = $location_obj[0]['lon'];
            $location_latlnag= [$lat,$lon];
           // dd($location_latlnag);
            $population = 7428;
            $Object_list = [];
            $score_list = array();
//            foreach ($location_data['elements'] as $loc)
//            {
//                if (array_key_exists('tags', $loc)) {
//                    if (array_key_exists('population', $loc['tags'])) {
//                        $population = $loc['tags']['population'];
//                        $location_latlnag[0] = $loc['lat'];
//                        $location_latlnag[1] = $loc['lon'];
//                        break;
//                    }
//                }
//
//            }
            //dd($location_latlnag);
            ini_set('max_execution_time', 8000000);
            $categories= LocationCategory::where('min_val','<',$population)->where('max_val','>=',$population)->orderBy('id')->get()->all();
            for($i =0; $i <count($categories); $i++)
            {
               // dd($categories[$i]);
                //var_dump($categories[$i]['id']);
                $special_obj = ['station','stop_position','stop_area'];
                $special_obj_added_to_score = 0;
                $score_list[$categories[$i]->id] = 0;
                $category_id = $categories[$i]->id;
                $locations = LocationObject::where('loc_cat_id',$category_id)->get()->all();
                for($j = 0; $j< count($locations); $j++)
                {
                    $object = $locations[$j]->type;
                    $distance_cat = DistanceScore::where('cat_id',$locations[$j]->loc_cat_distance_id)->get()->first();
                    //var_dump($distance_cat->id);
                    if (!array_key_exists($object,$Object_list))
                    {
                        //  dd($object);
                        $object_obj = $this->get_object($object,$location_latlnag[0], $location_latlnag[1],$locations[$j]->typeCategory);
                        $k =0;
                        if(count($object_obj['elements']) != 0)
                        {
                            $distance = 20000;
                            foreach($object_obj['elements'] as $elem)
                            {
                                if($elem['type'] == 'node')
                                {
                                    $pre_distance =$this->calculate_distance($location_latlnag[0],$location_latlnag[1],$elem['lat'],$elem['lon']);
                                    //                            $elem['distance'] = $pre_distance;
                                    $list[$object][$k] = $pre_distance;
                                    $k++;
                                    if($distance > $pre_distance)
                                    {
                                        $distance = $pre_distance;
                                    }
                                }

                            }
                           // dd($distance);
    
                            //$obj_lat = $object_obj['elements'][0]['lat'];
                            //$obj_lon = $object_obj['elements'][0]['lon'];
    
                            $Object_list[$object] =  $distance;
    
                        }else{
                            $Object_list[$object] =  20000;
                        }
                        //dd($object_obj);
                        if(in_array($object, $special_obj)){
                            if($special_obj_added_to_score == 0)
                            {
                                continue;
                            }
                            $special_obj_added_to_score = 1;
                            // var_dump($object);
                        }
                        $distance = $Object_list[$object];
                        if($distance < $distance_cat->distance_1)
                        {
                            $score_list[$categories[$i]->id] =  $score_list[$categories[$i]->id] +$locations[$j]->score_1;
                            //dd("distance_1 ".$distance.' '.$distance_cat->distance_1.' '.$object.' '.$category_id);
                        }
                        else if($distance < $distance_cat->distance_2)
                        {
                            $score_list[$categories[$i]->id] =  $score_list[$categories[$i]->id] +$locations[$j]->score_2;
                            //dd("distance_2 ".$distance.' '.$distance_cat->distance_1.' '.$object.' '.$category_id);
                        }
                        else if($distance < $distance_cat->distance_3)
                        {
                            $score_list[$categories[$i]->id] =  $score_list[$categories[$i]->id] +$locations[$j]->score_3;
                            // dd("distance_3");
                        }
                        else if($distance < $distance_cat->distance_4)
                        {
                            $score_list[$categories[$i]->id] =  $score_list[$categories[$i]->id] +$locations[$j]->score_4;
                            // dd("distance_3");
                        }
                        else
                        {
                            $score_list[$categories[$i]->id] =  $score_list[$categories[$i]->id];
                            //  dd("distance_4");
                        }
    
                    }
                }
            }
           // dd($score_list);
            $location_result = new LocationResult();
            $location_result->lat =$location_obj[0]['lat'];
            $location_result->lon =$location_obj[0]['lon'];
            $location_result->population =$population;
            $location_result->score =json_encode($score_list);
            $location_result->distances =json_encode($Object_list);
            $location_result->save();

            $hiesht_score =array_search(max($score_list), $score_list);
            $hiesht_score_category = LocationCategory::where('id',$hiesht_score)->get()->first();
            //dd($hiesht_score_category->name);
            $final_value_list = [
                'score' =>  $score_list[$hiesht_score],
                'scores'=>$score_list,
                'object_list'=>$Object_list,
                'category_name' => $hiesht_score_category->name,
                'place'=>$location_latlnag,
                'locations'=>$list,
                'distance' =>[
                    'supermarket' => $Object_list['supermarket'],
                    'school' =>$Object_list['school'],
                    'public_trasport' => $Object_list['station'],
                    'park' => $Object_list['park'],
                    'time'=> time()-$time
                ],
    
            ];
    
            return $final_value_list;
        }
        else{

            $scores= $is_location_has->score;
            $scores = json_decode($scores, true);
            $distances= $is_location_has->distances;
            $distances =json_decode($distances, true);
 
            $hiesht_score =array_search(max($scores), $scores);
            $hiesht_score_category = LocationCategory::where('id',$hiesht_score)->get()->first();

            $final_value_list = [
                'score' =>  $scores[$hiesht_score],
                'category_name' => $hiesht_score_category->name,
                'scores'=>$scores,
                'object_list'=>$distances,
            ];
           // dd($scores);
           return $final_value_list;
        }

       
       // return $list;

        //  return $location_latlnag;

    }
    public function getLocationData($lat, $lan)
    {
//        $lat= 49.48200509999999;
//        $lan =11.114459;

        // http://34.141.39.95/api/interpreter?data=%5Btimeout%3A25%5D%5Bout%3Ajson%5D%3B%0A(%20node%5Bname%3D%22Leutersdorf%22%5D%3B)%3B%0Aout%3B&target=xml
        $url = "http://34.141.39.95/api/interpreter?data=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B%0A(%0A%20%20node(around%3A50.0%2C".$lat."%2C".$lan.")%3B%0A)%3B%0Aout%20body%3B%0A>%3B%0Aout%20skel%20qt%3B&target=xml";
        //$url = 'http://34.141.39.95/api/interpreter?data=%5Btimeout%3A25%5D%5Bout%3Ajson%5D%3B%0A(%20node%5Bname%3D%22'.$location.'%22%5D%3B)%3B%0Aout%3B&target=xml';
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get($url);
        $response =$request->getBody()->getContents();

        $response = json_decode($response, true);
        return $response;
    }

    public function get_object($place,$lat,$lon,$type){

//         $data= '
//         [out:json];
//          node["'.$type.'" = "'.$place.'"](around:20000,'.$lat.','.$lon.');
//         out;
//         ';

        $data='%5Bout%3Ajson%5D%3B%0A(%0Anode%5B%22'.$type.'%22%3D%22'.$place.'%22%5D(around%3A20000%2C'.$lat.'%2C'.$lon.')%3B%0Away%5B%22'.$type.'%22%3D%22'.$place.'%22%5D(around%3A20000%2C'.$lat.'%2C'.$lon.')%3B%0Arelation%5B%22'.$type.'%22%3D%22'.$place.'%22%5D(around%3A20000%2C'.$lat.'%2C'.$lon.')%3B%0A)%3B%0Aout%20body%3B%0A%3E%3B%0Aout%20skel%20qt%3B%0A&target=mapql';

        //$url = 'http://34.141.39.95/api/interpreter?data=%0A%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B%0A%0A(%0A%20%20node%5B"aeroway"%3D"aerodrome"%5D(around%3A10000%2C52.5170365%2C13.3888599)%3B%0A)%3B%0Aout%201%20body%3B%0A&target=xml';
        //$url = 'http://34.141.39.95/api/interpreter?data=%0A<osm-script%20output%3D"json">%0A<query%20type%3D"node">%0A%20%20<around%20lat%3D"'.$lat.'"%20lon%3D"'.$lon.'"%20radius%3D"20000.0"%2F>%0A%20%20<has-kv%20k%3D"'.$type.'"%20v%3D"'.$place.'"%20%2F>%0A<%2Fquery>%0A<print%20>%0A%0A<%2Fosm-script>&target=xml';
        try{
            $url = 'http://34.141.39.95/api/interpreter?data='.$data;
            // dd($url);
            $client = new \GuzzleHttp\Client(['verify' => false]);
            $request = $client->get($url);
            $response =$request->getBody()->getContents();
    
            $response = json_decode($response, true);
            //dd($response);
            return $response;
        }catch (RequestException $e)
        {
            dd($e);
        }
       
    }
    function test(Request $request){
        return $request->lat ." ".$request->lon;
    }

}
