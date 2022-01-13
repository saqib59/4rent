<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    function index(){
        $properties =Property::where('owner_id', Auth::id())->get();
        $property_type = Property::distinct()->get(['object_type']);
        return view('object-list',['property'=>$properties, 'types'=>$property_type]);
    }
    //property_name=&rent_per_month=&house_no=&city=&anicallary_cost=&zipcode=&floor_no=&deposite=&objspec=&rooms=&sqm=&no_kitchen=&no_bathroom=&no_floor=&no_attic=&commiunity=&add_room=&rooms_key=&apartment_key=&front_key=&celler_key=&attic_key=&postbox_key=&other_key=&img=
    function create(Request $request){

        $property_count = Property::where('owner_id', Auth::id())->get()->count();
        $user_plan = User::where('id',Auth::id())->get()->first();
        $plan = Plan::where('id',$user_plan->plan_id)->get()->first();
           // 10                    2
       //dd($property_count);
        if($plan->propeties	== $property_count)
        {
            return redirect()->back()->with('message', 'Your plan is limited to properties '.$property_count.' upgrade your plan.');
        }


        $name = $request->input('property_name');
        $type = $request->input('type');
        $house_no = $request->input('house_no');
        $city = $request->input('city');
        $anicallary_cost = $request->input('anicallary_cost');
        $zip = $request->input('zipcode');
        $floor_no = $request->input('floor_no');
        $deposit = $request->input('deposite');
        $objspec = $request->input('objspec');
        $noofroom = $request->input('rooms');
        $sqm = $request->input('sqm');
        $noofkit = $request->input('no_kitchen');
        $no_bathroom = $request->input('no_bathroom');
        $nooffloor = $request->input('no_floor');
        $no_attic = $request->input('no_attic');
        $commiunity = $request->input('commiunity');
        $add_room = $request->input('add_room');
        $rooms_key = $request->input('rooms_key');
        $apartment_key = $request->input('apartment_key');
        $front_key = $request->input('front_key');

        $celler = $request->input('celler_key');
        $attic_key = $request->input('attic_key');
        $postbox_key = $request->input('postbox_key');
        $other_key = $request->input('other_key');

        $property = new Property();
        $property->name = $name;
        $property->object_type = 1;
        $property->owner_id =  Auth::id();
        $property->rent_pm = $request->input('rent_per_month');
        $property->deposite = $deposit;
        $property->street = $house_no;
        $property->city = $city;
        $property->zip_code = $zip;
        $property->anicallary_cost = $anicallary_cost;
        $property->floor = $floor_no;
        $property->specification = $objspec;
        $property->no_of_rooms = $noofroom;
        $property->sqm = $sqm;
        $property->no_of_kitchens = $noofkit;
        $property->no_of_bathrooms =$no_bathroom;
        $property->no_of_floor =$nooffloor;
        $property->no_of_attic =$no_attic;
        $property->commiunity =$commiunity;
        $property->celler =1;
        $property->front_keys =$front_key;
        $property->celler_key =$celler;
        $property->attic_key =$attic_key;
        $property->post_key =$postbox_key;
        $property->other_key = $other_key;
        //street
        $property->save();


        return redirect()->back()->with('message', 'successfully created');
    }

    public function getAllProperty()
    {
        $property = Property::all();
        return view('tenant-ui', ['property'=>$property]);
      //  dd($property);
    }
    function get_property_by_id($id)
    {
        $property = Property::where('id',$id)->get()->first();
        return view('property_details', ['property'=>$property]);
    }

    function delete($id)
    {
        Property::where('id',$id)->delete();
        return redirect()->route('property.list')->with('message', 'successfully Deleted');
    }

    function edit($id)
    {
        $property =Property::where('id',$id)->get()->first();
        return view('object-edit', ['property'=>$property]);
    }

    function update(Request $request)
    {
        $name = $request->input('property_name');
        $type = $request->input('type');
        $house_no = $request->input('house_no');
        $city = $request->input('city');
        $anicallary_cost = $request->input('anicallary_cost');
        $zip = $request->input('zipcode');
        $floor_no = $request->input('floor_no');
        $deposit = $request->input('deposite');
        $objspec = $request->input('objspec');
        $noofroom = $request->input('rooms');
        $sqm = $request->input('sqm');
        $noofkit = $request->input('no_kitchen');
        $no_bathroom = $request->input('no_bathroom');
        $nooffloor = $request->input('no_floor');
        $no_attic = $request->input('no_attic');
        $commiunity = $request->input('commiunity');
        $add_room = $request->input('add_room');
        $rooms_key = $request->input('rooms_key');
        $apartment_key = $request->input('apartment_key');
        $front_key = $request->input('front_key');

        $celler = $request->input('celler_key');
        $attic_key = $request->input('attic_key');
        $postbox_key = $request->input('postbox_key');
        $other_key = $request->input('other_key');
        $id = $request->input('id');

        $property = Property::where('id',$id)->get()->first();
        $property->name = $name;
        $property->object_type = 1;
        $property->rent_pm = $request->input('rent_per_month');
        $property->deposite = $deposit;
        $property->street = $house_no;
        $property->city = $city;
        $property->zip_code = $zip;
        $property->anicallary_cost = $anicallary_cost;
        $property->floor = $floor_no;
        $property->specification = $objspec;
        $property->no_of_rooms = $noofroom;
        $property->sqm = $sqm;
        $property->no_of_kitchens = $noofkit;
        $property->no_of_bathrooms =$no_bathroom;
        $property->no_of_floor =$nooffloor;
        $property->no_of_attic =$no_attic;
        $property->commiunity =$commiunity;
        $property->celler =1;
        $property->front_keys =$front_key;
        $property->celler_key =$celler;
        $property->attic_key =$attic_key;
        $property->post_key =$postbox_key;
        $property->other_key = $other_key;
        //street
        $property->save();

        return redirect()->route('property.profile',$id)->with('message', 'successfully Updated');

    }


}
