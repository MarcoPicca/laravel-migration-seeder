<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class trainsController extends Controller
{
    public function index(){
        $trains = Train::all();


        return view('admin.trains.index', [ 'trains' => $trains] );
    }
}
