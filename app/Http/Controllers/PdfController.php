<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    //

    function get_property($id)
    {
        $property = Property::where('id',$id)->get()->first();
        return view('dynamic_pdf', ['property'=>$property]);
    }

    function pdf($id)
    {
        $property = Property::where('id',$id)->get()->first();
        view()->share('property',$property);
        $pdf = PDF::loadView('dynamic_pdf', $property);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }

    function  convert()
    {

    }
}
