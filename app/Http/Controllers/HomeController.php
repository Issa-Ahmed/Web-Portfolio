<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $json = File::get(storage_path('json\projects.json'));
        $projectsList= json_decode($json, true);
        return view('home', compact('projectsList'));
    }

}
