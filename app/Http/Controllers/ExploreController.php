<?php

namespace App\Http\Controllers;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(Request $request){
        // get all travel packages
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.Explore.explore', ['items' => $items]);
    }
}
