<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BillController extends Controller
{
    //
    public function datatable()
    {
        $bills = Bill::all();
        return view('table-datatable-bills', ['bills'=>$bills]);

    }

    public function store(){
        //        dd(request()->all());
                   $inputs = request()->validate([
                    'bill_number'=>'required|unique:bills,bill_number|regex:/^([0-9\-\+\(\)]*)$/',
                    'bill_concept'=>'required',
                    'description'=>'required',
                    'amount'=>'required|numeric',
                    'date_issue'=>'required|date',
                    'bill_status'=>'required'
                ]);

                $bill = new Bill($inputs);
                $bill->save();
                session()->flash('bill-created-message', 'Factura: ' . $bill['bill_number'] . ' fue agregada con exito.');
                return redirect()->route('bill.datatable');

            }

            public function edit(Bill $bill)
            {

                //como lo inyectamos por parametros y el id. laravel lo hace solo detras de escenas, no hace falta el findOrFails
                return view('modify-bill', ['bill'=>$bill]);

            }

            public function destroy(Bill $bill){

                session()->flash('message', 'Factura: ' . $bill['bill_number'] . ' fue eliminado con exito.');
                $bill->delete();

        //        Session::flash('message', 'Post was deleted');

                return back();//helper function para return to that page
            }

            public function update(Bill $bill){

                $inputs = request()->validate([
                    'bill_number'=>['required','regex:/^([0-9\-\+\(\)]*)$/', Rule::unique('bills')->ignore($bill->bill_number, 'bill_number')],
                    'bill_concept'=>'required',
                    'description'=>'required',
                    'amount'=>'required|numeric',
                    'date_issue'=>'required|date',
                    'bill_status'=>'required'
                ]);

                $bill->bill_number = $inputs['bill_number'];
                $bill->bill_concept = $inputs['bill_concept'];
                $bill->description = $inputs['description'];
                $bill->amount = $inputs['amount'];
                $bill->date_issue = $inputs['date_issue'];
                $bill->bill_status = $inputs['bill_status'];
                $bill->save();

                session()->flash('bill-updated-message', 'Factura: ' . $inputs['bill_number'] . ' fue modificada con exito.');

                return redirect()->route('bill.datatable');
            }
}
