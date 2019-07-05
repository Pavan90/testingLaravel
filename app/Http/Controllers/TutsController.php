<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Project;

class TutsController extends Controller
{
    public function index()
    {
            $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create() {

        return view('projects.create');
    }

    public function show(Project $project) {

        return view('projects.show', compact('project'));
    }


    // public function show($id) {

    //     $project = Project::findOrFail($id);
    //     return view('projects.show', compact('project'));
    // }

    public function edit(Project $project) {

        return view('projects.edit', compact('project'));

    }

    // public function edit($id) {

    //     $project = Project::findOrFail($id);
    //     return view('projects.edit', compact('project'));

    // }

    public function update(Project $project) {
        // dd(request()-> all()); //dive and dump


        $project-> title = request('title');
        $project-> description = request('description');

        $project->save();

        return redirect('/projects');

    }

    // public function update($id) {
    //     // dd(request()-> all()); //dive and dump

    //     $project = Project::findOrFail($id);

    //     $project-> title = request('title');
    //     $project-> description = request('description');

    //     $project->save();

    //     return redirect('/projects');

    // }

    public function destroy(Project $project) {

        $project->delete();
        return redirect('/projects');

    }

    // public function destroy($id) {

    //     Project::findOrFail($id)->delete();
    //     return redirect('/projects');

    // }

    public function store(){

        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);

        // $project = new Project();

        // $project-> title = request('title');
        // $project->description = request('description');

        // $project->save();

        return redirect('/projects');
    }



}
