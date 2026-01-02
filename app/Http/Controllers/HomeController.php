<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery($category = null)
    {
        $projects = $category 
            ? Project::where('category', $category)->get()
            : Project::all();
        
        return view('gallery', compact('projects', 'category'));
    }
}
