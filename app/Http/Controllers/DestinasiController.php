<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class DestinasiController extends Controller
{
    public function __construct()
    {
//        $this->middleware(['auth:api']);
    }

    public function index(){
        $destinasis = Destination::select('id', 'name', 'address', 'rating', 'lat', 'long', 'image', 'opening_hours', 'closed_hours')->get();

        return $destinasis;
    }

    public function store(Request $request){
        $destination = new Destination();
        $destination->kabupaten_id = $request->kabupaten_id;
        $destination->category_wisata_id = $request->category_wisata_id;
        $destination->name = $request->name;
        $destination->address = $request->address;
        $destination->rating = $request->rating;
        $destination->lat = $request->lat;
        $destination->long = $request->long;
        $destination->image = $request->image;
        $destination->opening_hours = $request->opening_hours;
        $destination->closed_hours = $request->closed_hours;
        $destination->status = 1;

        if($destination->save()){
            return response()->json("success add destination", 200);
        }

    }

    public function search($name){
        $data = Destination::where('name','LIKE', "%{$name}%")->get();

        return "andreas";
    }

    public function find($id){
        $data = Destination::find($id);

        return $data;
    }
}
