<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\Notice;
use App\Models\Property;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.app');
    }
    public function contract()
    {
        return view('contract_select');
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
    public function count(){
        $user_id = Auth::id();
        $prop_list = [];
        $notice = Notice::where('user_id',$user_id)->get();
        $property = DB::table('properties')->count();
        $tenant_count = DB::table('tenants')->count();
        $properties = Property::where('owner_id',1)->get();
        foreach ($properties as $prop)
        {
            $tenants = Tenant::where('property_id',$prop->id)->count();

            if($tenants == 0)
                array_push($prop_list, $prop->id);
        }
        $properties_without = Property::whereIn('id',$prop_list)->get();
        $income =Income::where('user_id',1)->where('year',date('Y'))->sum('total');
        $income_range = Income::where('user_id',$user_id)->where('year',date('Y'))->orderBy('month','desc')->take(10)->get();
        return view('dashboard', ['property' => $property,'income'=>$income, 'tenant'=>$tenant_count, 'notice'=>$notice,'income_ranges'=>$income_range,'empty_property'=>$properties_without]);

    }
//    function test_val()
//    {
//
//
//
//
//        dd($properties);
//    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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


    function get_distance($lat,$long,$place){
        $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$lat,$long&radius=3000&type=$place&key=AIzaSyBlQfKzh8Fq3ljh4usZZU7Kjl-OnZXdY_w";
        //$url = 'http://34.141.39.95/api/interpreter?data=%5Btimeout%3A25%5D%5Bout%3Ajson%5D%3B%0A(%20node%5Bname%3D%22'.$location.'%22%5D%3B)%3B%0Aout%3B&target=xml';
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get($url);
        $response =$request->getBody()->getContents();

        $response = json_decode($response, true);
        return $response;
    }

    function get_5_loc(Request $request)
    {
        $places = ['school','supermarket','public_transport','park'];
        $places_distance = [];
        foreach ($places as $place)
        {

            $distance = 1000000;
            $data = $this->get_distance($request->lat,$request->lng,$place);
            if($data['results'] != null)
            {
                //dd($data['results']);
                foreach ($data['results'] as $loc)
                {
                    $pre_distance = $this->calculate_distance($request->lat,$request->lng,$loc['geometry']['location']['lat'],$loc['geometry']['location']['lng']);
                    if($distance > $pre_distance)
                    {
                        $distance = $pre_distance;
                    }
                }

            }
            $places_distance[$place] = $distance;
        }

        return $places_distance;

    }


}
