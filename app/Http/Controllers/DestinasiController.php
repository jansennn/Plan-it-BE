<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class DestinasiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index(){
        $destinasis = Destination::select('name', 'address', 'rating', 'lat', 'long', 'image', 'opening_hours', 'closed_hours')->get();

        return $destinasis;
    }
}
