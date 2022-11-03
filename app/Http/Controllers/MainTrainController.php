<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\train;
use Illuminate\Support\Carbon;

class MainTrainController extends Controller
{
    public function index()
    {
        $currentdate =  Carbon::now()->toDateString();
        $trains = train::where('data_partenza', $currentdate)->get();
        return view('home-train', compact('trains'));
    }
}
