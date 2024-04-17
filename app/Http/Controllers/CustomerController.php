<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public function datatable()
    {
        $customers = Customer::all();

        return view('table-datatable-customers', ['customers'=>$customers]);
        //esta hp funcion no me sirve de mierdaasdsasdAWEaweqasdfasfdasfdasfd
    }

    public function store(){

                $inputs = request()->validate([
                    'identification'=>'required|unique:customers,identification',
                    'name'=>'required',
                    'first_last_name'=>'required',
                    'second_last_name'=>'required',
                    'phone'=>'required|unique:customers,phone|regex:/^([0-9\s\-\+\(\)]*)$/',
                    'email'=>'required|email|unique:customers,email'
                ]);

                $customer = new Customer($inputs);
                $customer->save();
                session()->flash('customer-created-message', 'Cliente: ' . $customer['name'] . ' fue agregado(a) con exito.');
                return redirect()->route('customer.datatable');

            }

            public function edit(Customer $customer)
            {


                return view('modify-customer', ['customer'=>$customer]);

            }

            public function destroy(Customer $customer){


                session()->flash('message', 'Empleado(a): ' . $customer['name'] . ' fue eliminado(a) con exito.');
                $customer->delete();


                return back();//helper function para return to that page
            }

            public function update(Customer $customer){

                $inputs = request()->validate([
                    'identification'=>['required', Rule::unique('customers')->ignore($customer->identification, 'identification')],
                    'name'=>'required|max:30|alpha',
                    'first_last_name'=>'required|max:30|alpha',
                    'second_last_name'=>'required|max:30|alpha',
                    'phone'=>['required','regex:/^([0-9\s\-\+\(\)]*)$/', Rule::unique('customers')->ignore($customer->phone, 'phone')],
                    'email'=>['required','email', Rule::unique('customers')->ignore($customer->email, 'email')]
                ]);



                $customer->identification = $inputs['identification'];
                $customer->name = $inputs['name'];
                $customer->first_last_name = $inputs['first_last_name'];
                $customer->second_last_name = $inputs['second_last_name'];
                $customer->phone = $inputs['phone'];
                $customer->email = $inputs['email'];
                $customer->save();

                session()->flash('customer-updated-message', 'Cliente: ' . $inputs['name'] . ' fue modificado(a) con exito.');

                return redirect()->route('customer.datatable');
            }
}

