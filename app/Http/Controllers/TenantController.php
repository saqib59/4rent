<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenantController extends Controller
{
    function index(){
        $tenants = Tenant::all();
        $properties = Property::where('owner_id',Auth::id())->get();
        return view('tenant-list',['tenants'=>$tenants, 'properties'=>$properties]);
    }
    //
    function create(Request $request){
        //fname_1=Hirusha&lname_1=Fernando&rehouse_1=02%2C&city_1=laskshathiya&zipcode_1=10400&fname_2=&lname_2=&rehouse_2=&city_2=&zipcode_2=&email_1=hirusharandunu11%40gmail.com&tp_1=0761693445&nic_1=123&dob_1=&email_2=&tp_2=&nic_2=&dob_2=&date_move_1=&inspection_1=&date_move_2=&inspection_2=
        //$type = $request->input('type');
        $fname_1 = $request->input('fname_1');
        $lname_1 = $request->input('lname_1');
        $nic_1 = $request->input('nic_1');
        $email_1 = $request->input('email_1');
        $bday_1 = $request->input('dob_1');
       // $object_1 = $request->input('dob_1');
        $dateofmove_1 = $request->input('date_move_1');
        $inspection_1 = $request->input('inspection_1');
        $numofteanent_1 = $request->input('no_tenant_1');
        $rehouse_1 = $request->input('rehouse_1');
        $city_1 = $request->input('city_1');
        $zip_1 = $request->input('zipcode_1');
        //inspection

        $fname_2 = $request->input('fname_2');
        $lname_2 = $request->input('lname_2');
        $nic_2 = $request->input('nic_2');
        $email_2 = $request->input('email_2');
        $bday_2 = $request->input('dob_2');
        // $object_1 = $request->input('object');
        $dateofmove_2 = $request->input('date_move_2');
        $inspection_2 = $request->input('inspection_2');
        $numofteanent_2 = $request->input('no_tenant_1');
        $rehouse_2 = $request->input('rehouse_2');
        $city_2 = $request->input('city_2');
        $zip_2 = $request->input('zipcode_1');

        $tenant = new Tenant();
        $tenant->first_name = $fname_1;
        $tenant->last_name = $lname_1;
        $tenant->nic = $nic_1;
        $tenant->email = $email_1;
        $tenant->dob = $bday_1;
        $tenant->property_id = 1;
        $tenant->date_of_move_in = $dateofmove_1;
        $tenant->inspection_date = $inspection_1;
        $tenant->no_of_tenant = $numofteanent_1;
        $tenant->house_number = $rehouse_1;
        $tenant->recent_city = $city_1;
        $tenant->zip_code = $zip_1;
        $tenant->save();

        if($fname_2 != null && $lname_2 != null)
        {
            $tenant = new Tenant();
            $tenant->first_name = $fname_2;
            $tenant->last_name = $lname_2;
            $tenant->nic = $nic_2;
            $tenant->email = $email_2;
            $tenant->dob = $bday_2;
            $tenant->property_id = 1;
            $tenant->date_of_move_in = $dateofmove_2;
            $tenant->inspection_date = $inspection_2;
            $tenant->no_of_tenant = $numofteanent_2;
            $tenant->house_number = $rehouse_2;
            $tenant->recent_city = $city_2;
            $tenant->zip_code = $zip_2;
            $tenant->save();
        }

        return redirect()->back()->with('message', 'successfully created');
    }

    function get($id)
    {
        $tenant = Tenant::where('id', $id)->get()->first();
        return view('tenant-profile', ['tenant'=>$tenant]);
    }

    function delete($id)
    {
        Tenant::where('id',$id)->delete();
        return redirect()->route('tenant-list')->with('message', 'successfully Deleted');

    }

    function edit_get($id)
    {
        $tenant = Tenant::where('id', $id)->get()->first();
        return view('tenant-edit', ['tenant'=>$tenant]);
    }

    function tenant_update(Request $request)
    {
        $fname_1 = $request->input('fname_1');
        $lname_1 = $request->input('lname_1');
        $nic_1 = $request->input('nic_1');
        $email_1 = $request->input('email_1');
        $bday_1 = $request->input('dob_1');
        // $object_1 = $request->input('dob_1');
        $dateofmove_1 = $request->input('date_move_1');
        $inspection_1 = $request->input('inspection_1');
        $numofteanent_1 = $request->input('no_tenant_1');
        $rehouse_1 = $request->input('rehouse_1');
        $city_1 = $request->input('city_1');
        $zip_1 = $request->input('zipcode_1');
        //inspection

        $id = $request->input('id');
        $tenant = Tenant::where('id',$id)->get()->first();
        if($bday_1 == null)
            $bday_1 = $tenant->dob ;
        if($dateofmove_1 == null)
            $dateofmove_1 = $tenant->date_of_move_in;
        if($inspection_1 == null)
            $inspection_1 = $tenant->inspection_date;

        $tenant->first_name = $fname_1;
        $tenant->last_name = $lname_1;
        $tenant->nic = $nic_1;
        $tenant->email = $email_1;
        $tenant->dob = $bday_1;
        $tenant->property_id = 1;
        $tenant->date_of_move_in = $dateofmove_1;
        $tenant->inspection_date = $inspection_1;
        $tenant->no_of_tenant = $numofteanent_1;
        $tenant->house_number = $rehouse_1;
        $tenant->recent_city = $city_1;
        $tenant->zip_code = $zip_1;
        $tenant->save();
        return redirect()->route('tenant-profile',$tenant->id)->with('message', 'successfully Updated');


    }

}
