<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Validation\Rule;

class SupplierController extends Controller
{
    //
        public function datatable()
    {
        $suppliers = Supplier::all();
        return view('table-datatable-suppliers', ['suppliers'=>$suppliers]);

    }

    public function store(){
        //        dd(request()->all());
                $inputs = request()->validate([
                   'identification'=>'required|unique:suppliers,identification',
                   'legal_document'=>'required|unique:suppliers,legal_document',
                    'name'=>'required|max:30|alpha',
                    'first_last_name'=>'required|max:30|alpha',
                    'second_last_name'=>'required|max:30|alpha',
                    'phone'=>'required|unique:suppliers,phone|regex:/^([0-9\s\-\+\(\)]*)$/',
                    'second_phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                    'email'=>'required|email|unique:suppliers,email',
                    'company_name'=>'required'
                ]);

                $supplier = new Supplier($inputs);
                $supplier->save();
                session()->flash('supplier-created-message', 'Proveedor(a): ' . $supplier['name'] . ' fue agregado(a) con exito.');
                return redirect()->route('supplier.datatable');

            }

            public function edit(Supplier $supplier)
            {

                //como lo inyectamos por parametros y el id. laravel lo hace solo detras de escenas, no hace falta el findOrFails
                return view('modify-supplier', ['supplier'=>$supplier]);

            }

            public function destroy(Supplier $supplier){

                session()->flash('message', 'Proveedor(a): ' . $supplier['name'] . ' fue eliminado(a) con exito.');
                $supplier->delete();

        //        Session::flash('message', 'Post was deleted');

                return back();//helper function para return to that page
            }

            public function update(Supplier $supplier){

                $inputs = request()->validate([
                    'identification'=>['required', Rule::unique('suppliers')->ignore($supplier->identification, 'identification')],
                    'legal_document'=>['required', Rule::unique('suppliers')->ignore($supplier->legal_document, 'legal_document')],
                    'name'=>'required|max:30|alpha',
                    'first_last_name'=>'required|max:30|alpha',
                    'second_last_name'=>'required|max:30|alpha',
                    'phone'=>['required','regex:/^([0-9\s\-\+\(\)]*)$/', Rule::unique('suppliers')->ignore($supplier->phone, 'phone')],
                    'second_phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                    'email'=>['required','email', Rule::unique('suppliers')->ignore($supplier->email, 'email')],
                    'company_name'=>'required'
                ]);

                $supplier->identification = $inputs['identification'];
                $supplier->legal_document = $inputs['legal_document'];
                $supplier->name = $inputs['name'];
                $supplier->first_last_name = $inputs['first_last_name'];
                $supplier->second_last_name = $inputs['second_last_name'];
                $supplier->phone = $inputs['phone'];
                $supplier->second_phone = $inputs['second_phone'];
                $supplier->email = $inputs['email'];
                $supplier->company_name = $inputs['company_name'];
                $supplier->save();

                session()->flash('supplier-updated-message', 'Proveedor(a): ' . $inputs['name'] . ' fue modificado(a) con exito.');

                return redirect()->route('supplier.datatable');
            }

}
