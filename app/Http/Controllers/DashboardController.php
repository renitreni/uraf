<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Excel;
use App\Exports\TabangExport;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Message\MessageFactoryInterface;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function table()
    {
        $result = DB::table('tbl_tabang as tt')
                    ->selectRaw('(select count(*) from follow_ups where tabang_id = tt.tabang_id) as follow_ups_count,
                    tt.*');

        return DataTables::of($result)->make(true);
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

    public function destroy(Request $request)
    {
        DB::table('tbl_tabang')->where('tabang_id', $request->tabang_id)->delete();
    }

    public function export()
    {
        return Excel::download(new TabangExport(), 'Tabang_Results_' . Carbon::now() . '.xlsx');
    }
}
