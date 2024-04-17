<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    //
    public function datatable()
    {
        $employees = Employee::all();
        return view('table-datatable-employees', ['employees'=>$employees]);

    }


    public function store(){
        //        dd(request()->all());
                $inputs = request()->validate([
                   'identification'=>'required|unique:employees,identification',
                    'name'=>'required|max:30|alpha',
                    'first_last_name'=>'required|max:30|alpha', //alpha: solo letras
                    'second_last_name'=>'required|max:30|alpha',
                    'gender'=>'required',
                    'image'=>'image|mimes:jpeg,jpg,png,gif|max:3000',
                    'phone'=>'required|unique:employees,phone|regex:/^([0-9\s\-\+\(\)]*)$/',
                    'emergency_phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                    'address'=>'required|max:100',
                    'diseases'=>'max:255',
                    'email'=>'required|email|unique:employees,email',
                    'date_of_admission'=>'required|date',
                    'salary'=>'required|numeric'
                ]);

                if(request('image')){
                    $inputs['image'] = request('image')->store('images/employee/'.'identification('.$inputs['identification'].')');
                }

                $employee = new Employee($inputs);
                $employee->save();
                session()->flash('employee-created-message', 'Empleado(a): ' . $employee['name'] . ' fue agregado(a) con exito.');
                return redirect()->route('employee.datatable');

            }

            public function edit(Employee $employee)
            {

                //como lo inyectamos por parametros y el id. laravel lo hace solo detras de escenas, no hace falta el findOrFails
                return view('modify-employee', ['employee'=>$employee]);

            }

            public function destroy(Employee $employee){


                session()->flash('message', 'Empleado(a): ' . $employee['name'] . ' fue eliminado(a) con exito.');
                $employee->delete();
                $url = $employee->image;
                $url2 =  str_replace('http://127.0.0.1:8000/storage/', '', $url);
                Storage::delete($url2);
                File::deleteDirectory(public_path( 'storage/images/employee/identification('.$employee['identification'].')'));


        //        Session::flash('message', 'Post was deleted');

                return back();//helper function para return to that page
            }

            public function update(Employee $employee){

                $inputs = request()->validate([
                    'identification'=>['required', Rule::unique('employees')->ignore($employee->identification, 'identification')],
                    'name'=>'required|max:30|alpha',
                    'first_last_name'=>'required|max:30|alpha', //alpha: solo letras
                    'second_last_name'=>'required|max:30|alpha',
                    'gender'=>'required',
                    'image'=>'image|mimes:jpeg,jpg,png,gif|max:3000',
                    'phone'=>['required','regex:/^([0-9\s\-\+\(\)]*)$/', Rule::unique('employees')->ignore($employee->identification, 'identification')],
                    'emergency_phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                    'address'=>'required|max:100',
                    'diseases'=>'max:255',
                    'email'=>['required','email', Rule::unique('employees')->ignore($employee->email, 'email')],
                    'date_of_admission'=>'required|date',
                    'salary'=>'required|numeric'
                ]);

                if(request('image')){
                    $url = $employee->image;
                    $url2 =  str_replace('http://127.0.0.1:8000/storage/', '', $url);
                    Storage::delete($url2);
                    $inputs['image'] = request('image')->store('images/employee/'.'identification('.$inputs['identification'].')');
                    $employee->image = $inputs['image'];
                }

                $employee->identification = $inputs['identification'];
                $employee->name = $inputs['name'];
                $employee->first_last_name = $inputs['first_last_name'];
                $employee->second_last_name = $inputs['second_last_name'];
                $employee->gender = $inputs['gender'];
                $employee->phone = $inputs['phone'];
                $employee->emergency_phone = $inputs['emergency_phone'];
                $employee->address = $inputs['address'];
                $employee->diseases = $inputs['diseases'];
                $employee->email = $inputs['email'];
                $employee->date_of_admission = $inputs['date_of_admission'];
                $employee->salary = $inputs['salary'];
                $employee->save();

                session()->flash('employee-updated-message', 'Empleado(a): ' . $inputs['name'] . ' fue modificado(a) con exito.');

                return redirect()->route('employee.datatable');
            }
}
