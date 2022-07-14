<?php

namespace App\Http\Controllers;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{   
    
    public function index(Request $request){
        $user = Auth::user();
       
        return view('pages.Profile.profile');
    }
}
