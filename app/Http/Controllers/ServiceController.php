<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $items = Service::orderByDesc('id')->paginate(3);
        return view('services', compact('items'));
    }

    public function service_details($id)
    {
        $list = Service::whereNotIn('id',[$id])->inRandomOrder()->limit(5)->get();

        $item = Service::where('id',$id)->firstOrFail();
        return view('service_details',compact('item','list'));
    }
}
