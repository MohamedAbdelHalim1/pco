<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('frontend.projects');
    }
    public function index_details(){
        return view('frontend.project-details');
    }
}
