<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $sliders = Slider::orderByDesc('id')->get();
        $services = Service::where('status',1)->inRandomOrder()->limit(3)->get();
        return view('homepage',compact('services','sliders'));
    }
}
