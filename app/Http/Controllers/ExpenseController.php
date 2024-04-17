<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Expense;
use App\Models\Bill;


class ExpenseController extends Controller
{
    public function datatable(){

        $expenses = Expense::all();
        $projects = Project::all();
        $bills = Bill::all();
        return view('table-datatable-expenses',['expenses'=>$expenses,'projects'=>$projects, 'bills'=>$bills]);


}
public function create(){
        $expenses = Expense::all();
        $projects = Project::all();
        $bills = Bill::all();
        return view('register-expense',['expenses'=>$expenses,'projects'=>$projects, 'bills'=>$bills]);

}
public function store(){
    $inputs =  request()->validate([
        'project_id'=>'required',
        'bill_id'=>'required',
        'expense_name'=>'required',
        'expense_description'=>'required',
        'unique_expense'=>'required|numeric',
         ]);

         $expense =  new Expense($inputs);
         $expense->save();
         session()->flash('expense-created-message', 'Gasto: ' . $expense['expense_name'] . ' fue agregado con exito.');
         return redirect()->route('expense.datatable');


}
public function edit(Expense $expense)
{

        $projects = Project::all();
        $bills = Bill::all();
    return view('modify-expense', ['expense'=>$expense,'projects'=>$projects, 'bills'=>$bills]);

}

public function destroy(Expense $expense){


    session()->flash('message', 'Gasto: ' . $expense['expense_name'] . ' fue eliminado con exito.');
    $expense->delete();

    return back();//helper function para return to that page
}

public function update(Expense $expense){

    $inputs =  request()->validate([
        'project_id'=>'required',
        'bill_id'=>'required',
        'expense_name'=>'required',
        'expense_description'=>'required',
        'unique_expense'=>'required|numeric',
         ]);


    $expense->project_id = $inputs['project_id'];
    $expense->bill_id = $inputs['bill_id'];
    $expense->expense_name = $inputs['expense_name'];
    $expense->expense_description = $inputs['expense_description'];
    $expense->unique_expense = $inputs['unique_expense'];
    $expense->save();

    session()->flash('expense-updated-message', 'Gasto: ' . $inputs['expense_name'] . ' fue modificado con exito.');

    return redirect()->route('expense.datatable');
}

}
