<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\FollowUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UrafFormRequest;
use DB;
use Alert;

class HomeController extends Controller
{
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

        Mail::to(['renier.trenuela@gmail.com'])
            ->send(new \App\Mail\NewComplaint($request));

        Alert::success('Success!', 'URAF has been submmited!');

        return redirect('/');
    }

    public function followUpForm(Request $request)
    {

        return view('follow-up-form');
    }

    public function followUpFormSend(Request $request)
    {
        $result = DB::table('tbl_tabang')->where('first_name', $request->first_name)
                    ->where('last_name', $request->last_name)
                    ->where('passport', $request->passport)
                    ->first();

        if ($result) {
            $model             = new FollowUp();
            $model->tabang_id  = $result->tabang_id;
            $model->first_name = $request->first_name;
            $model->last_name  = $request->last_name;
            $model->passport   = $request->passport;
            $model->save();

            return view('uraf-form-view', compact('result'));
        } else {

            Alert::warning('Complaint Not Found', 'Please fill up new form!');

            return redirect(route('home.uraf-form'));
        }
    }
}
