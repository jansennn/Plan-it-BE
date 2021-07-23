<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class PlanController extends Controller
{
    public function __construct()
    {
//        $this->middleware(['auth:api']);
    }

    public function makeplan(Request $request){
        $data = new Plan();
        $data->user_id = $request->user_id;
        $data->name_route_travel = $request->name_route_travel;
        $data->category_wisata = json_encode($request->category_wisata);
        $data->type_transportation = $request->type_transportation;
        $data->date_start = $request->date_start;
        $data->date_end = $request->date_end;
        $data->hours = $request->hours;
        $data->gambar = $request->gambar;
        $data->lat = $request->lat;
        $data->long = $request->long;
        $data->status = 0;

        if($data->save()){
            return "success make plan";
        }
    }
}
