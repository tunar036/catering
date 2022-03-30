<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index (){
        $items = Project::orderByDesc('id')->paginate(6);
        return view('projects',compact('items'));
    }

    public function project_details ($id){

        $item = Project::where('id',$id)->firstOrFail();
        return view('project_details',compact('item'));
    }

}
