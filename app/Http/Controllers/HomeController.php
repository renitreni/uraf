<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\UrafFormRequest;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('home');
    }

    public function urafForm()
    {
        return view('uraf-form');
    }

    public function urafFormSend(UrafFormRequest $request)
    {
        $images = [];
        if ($request->file('image1')) {
            $images[] = $request->file('image1')->storeAs('', $request->file('image1')->getClientOriginalName());
        }
        if ($request->file('image2')) {
            $images[] = $request->file('image2')->storeAs('', $request->file('image2')->getClientOriginalName());
        }
        if ($request->file('image3')) {
            $images[] = $request->file('image3')->storeAs('', $request->file('image3')->getClientOriginalName());
        }

        DB::table('tbl_tabang')->insert([
            "first_name"       => $request->first_name,
            "middle_name"      => $request->middle_name,
            "last_name"        => $request->last_name,
            "gender"           => $request->gender,
            "occupation"       => $request->occupation,
            "passport"         => $request->passport,
            "iqama"            => $request->iqama,
            "email_address"    => $request->email_address,
            "contact_number"   => $request->contact_number,
            "contact_number2"  => $request->contact_number2,
            "location_ksa"     => $request->location_ksa,
            "employer_name"    => $request->employer_name,
            "employer_contact" => $request->employer_contact,
            "saudi_agency"     => $request->saudi_agency,
            "agency"           => $request->agency,
            "complain"         => $request->complain,
            "actual_langitude" => $request->actual_langitude,
            "actual_longitude" => $request->actual_longitude,
            "image1"           => $images[0] ?? '',
            "image2"           => $images[1] ?? '',
            "image3"           => $images[2] ?? '',
            "date_created"     => Carbon::now(),
        ]);

        return redirect()->back();
    }
}
