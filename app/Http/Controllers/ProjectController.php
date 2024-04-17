<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function datatable()
    {
        $projects = Project::all();
        $customers = Customer::all();

        return view('table-datatable-projects', ['customers'=>$customers,'projects'=>$projects]);
    }
    public function create(){

        $customers = Customer::all();
        return view('register-project', ['customers'=>$customers]);
    }
    public function store(){

                $inputs = request()->validate([

                    'customer_id' =>'required',
                    'image'=>'image|mimes:jpeg,jpg,png,gif|max:3000',
                    'project_name'=> 'required|unique:projects,project_name',
                    'in_charge'=> 'required',
                    'start_date'=>'required|date',
                    'finish_date'=>'nullable|date|after:start_date',
                    'budget'=>'required|numeric'
                ]);

                if(request('image')){
                    $inputs['image'] = request('image')->store('images/project/'.'project_name('.$inputs['project_name'].')');
                }

                $project = new Project($inputs);
                $project->save();
                session()->flash('project-created-message', 'El proyecto: ' . $project['project_name'] . ' fue agregado(a) con exito.');
                return redirect()->route('project.datatable');

            }

            public function edit(Project $project)
            {

                $customers = Customer::all();
                return view('modify-project', ['project'=>$project, 'customers'=>$customers]);

            }

            public function destroy(Project $project){

                session()->flash('message', 'El proyecto: ' . $project['project_name'] . ' fue eliminado(a) con exito.');
                $project->delete();
                $url = $project->image;
                $url2 =  str_replace('http://127.0.0.1:8000/storage/', '', $url);
                Storage::delete($url2);
                File::deleteDirectory(public_path( 'storage/images/project/project_name('.$project['project_name'].')'));


                return back();
            }

            public function update(Project $project){

                $inputs = request()->validate([
                    'customer_id'=>'required',
                    'image'=>'image|mimes:jpeg,jpg,png,gif|max:3000',
                    'project_name'=>['required', Rule::unique('projects')->ignore($project->customer_id, 'customer_id')],
                    'in_charge'=> 'required',
                    'start_date'=>'required|date',
                    'finish_date'=> 'nullable|date|after:start_date',
                    'budget'=>'required|numeric'
                ]);

                if(request('image')){
                    $url = $project->image;
                    $url2 =  str_replace('http://127.0.0.1:8000/storage/', '', $url);
                    Storage::delete($url2);
                    $inputs['image'] = request('image')->store('images/project/'.'project_name('.$inputs['project_name'].')');
                    $project->image = $inputs['image'];
                }

                $project->customer_id = $inputs['customer_id'];
                $project->project_name = $inputs['project_name'];
                $project->in_charge = $inputs['in_charge'];
                $project->start_date = $inputs['start_date'];
                $project->finish_date = $inputs['finish_date'];
                $project->budget = $inputs['budget'];
                $project->save();

                session()->flash('project-updated-message', 'El proyecto: ' . $inputs['project_name'] . ' fue modificado(a) con exito.');

                return redirect()->route('project.datatable');
            }

}
