<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('layouts.projects',compact('projects'));
    }

    /**
     * admin handling project page
     * 
     */
    public function indexAdmin()
    {
        $projects = Project::all();

        return view('layouts.projectsHandler',compact('projects'));
    }

    /**
     * delete project
     */
    public function delete(Project $project){
        $project->delete();
        return back()->with('success', 'Projet supprimé');
    }

}
