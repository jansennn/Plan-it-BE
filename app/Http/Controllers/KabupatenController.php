<?php

namespace App\Http\Controllers;

use App\Kabupaten;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index(){
        $kabupatens = Kabupaten::select('id', 'name')->get();

        return $kabupatens;

    }
}
