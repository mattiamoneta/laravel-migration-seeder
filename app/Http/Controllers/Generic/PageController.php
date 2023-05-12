<?php

namespace App\Http\Controllers\Generic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
           $trains = Train::where('departure','like', date('Y-m-d').'%')->get();
            return view('index',compact('trains'));
    }
}
