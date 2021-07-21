<?php

namespace App\Http\Controllers;

use App\Jobs\CreateRutePerjalanan;
use App\RutePerjalanan;
use Carbon\Carbon;
use Illuminate\Http\Request;


class RutePerjalananController extends Controller
{
    public function __construct()
    {
//        $this->middleware(['auth:api']);
    }

    public function inisiasi(Request $request)
    {
        CreateRutePerjalanan::dispatch($request);
        return "Rute Perjalanan Telah dibuat";
    }

    public function displayRutePerjalanan($id){
        $data= RutePerjalanan::where('id', $id)->with('day.rute.destinasi.category')->first();

        return $data;
    }

    public function rutePerjalananUpcomingByUserId($id){
        $data = RutePerjalanan::where('user_id', $id)->where('status', 1)->get();

        return $data;
    }

    public function rutePerjalananPastByUserId($id){
        $data = RutePerjalanan::where('user_id', $id)->where('status', 0)->get();

        return $data;
    }

    public function trending(){
        $data = RutePerjalanan::with('user')->orderByDesc('count_trend')->limit(6)->get();

        return $data;
    }

    public function deleteRutePerjalananById($id){
        $data = RutePerjalanan::find($id);

        if($data->delete()) {
            return response('success delete rute perjalanan', 200)
                ->header('Content-Type', 'text/plain');
        }
    }
    public function updateRutePerjalanan($id){
        foreach (RutePerjalanan::where([['user_id', $id],['status', 1]])->get() as $item) {
            $akhir = strtotime($item->tanggal_akhir);
            $sekarang = strtotime(Carbon::now('Asia/Jakarta')->format('d-m-Y'));
            $datediff = $akhir - $sekarang;
            if ($datediff < 0) {
                $rute_u = RutePerjalanan::find($item->id);
                $rute_u->status = 0;
                $rute_u->update();
            }
        }
        return response('Rute perjalanan is updated', 200)
            ->header('Content-Type', 'text/plain');
    }
}
