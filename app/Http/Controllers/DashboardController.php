<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Excel;
use App\Exports\TabangExport;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use GuzzleHttp\Message\MessageFactoryInterface;

class DashboardController extends Controller
{
    public function index()
    {

        $client = new Client();

        $request = $client->post('https://txtlibre.com/send_message-202012081755.php', [
            'query' => [
                'frm_senders_namex' => 'sampling',
                'frm_sen'           => '0530',
                'frm_senders_num'   => '09324123423',
                'frm_recepient_num' => '09064243594',
                'frm_messagex'      => 'sample',
            ],
        ]);

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
