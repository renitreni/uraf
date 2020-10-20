<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Excel;
use App\Exports\TabangExport;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard');
    }

    public function table()
    {
        return DataTables::of(DB::table('tbl_tabang'))->make(true);
    }

    public function store(Request $request)
    {
        //
    }

    public function track($lat, $lang)
    {
        return view('track', compact('lat', 'lang'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function export()
    {
        return Excel::download(new TabangExport(), 'Tabang_Results_' . Carbon::now() . '.xlsx');
    }
}
