<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryWisata;

class CategoryWisataController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index(){
        $categoryWisatas = CategoryWisata::select('id', 'name')->get();

        return $categoryWisatas;
    }
}
