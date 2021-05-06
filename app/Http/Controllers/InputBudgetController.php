<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RutePerjalanan;

class InputBudgetController extends Controller
{
    public function inputBudget(Request $request, $id){
        $data = RutePerjalanan::find($id);
        $data->budget = $request->budget;
        $data->status = 0;

        if($data->update()){
            return "haha";
        }
    }
}
