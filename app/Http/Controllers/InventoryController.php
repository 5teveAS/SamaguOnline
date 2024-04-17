<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function datatable(){
    $inventories = Inventory::all();

    return view('table-datatable-inventory', ['inventories'=>$inventories]);
   }
   public function store()
   {
       $inputs = request()->validate([
        'product_name'=>'required',
        'type'=>'required',
        'description'=>'required',
        'quantity'=>'required|numeric',
        'cost'=>'required|numeric'

       ]);
       $inventorie= new Inventory($inputs);
       $inventorie->save();
       session()->flash('inventory-created-message', 'Articulo: ' .$inventorie['type'].' fue agregado con éxito.');
       return redirect()->route('inventory.datatable');
   }
   public function edit(Inventory $inventory)
   {
    return view('modify-inventory',['inventory'=>$inventory]);

   }
   public function destroy(Inventory $inventory)
   {
    session()->flash('message', 'Articulo: '.$inventory['type']. ' fue eliminado con éxito');
    $inventory->delete();
    return back();


   }
   public function update(Inventory $inventory){
    $inputs = request()->validate([
        'product_name'=>'required',
        'type'=>'required',
        'description'=>'required',
        'quantity'=>'required|numeric',
        'cost'=>'required|numeric'

    ]);
    $inventory->product_name=$inputs['product_name'];
    $inventory->type=$inputs['type'];
    $inventory->description=$inputs['description'];
    $inventory->quantity=$inputs['quantity'];
    $inventory->cost=$inputs['cost'];
    $inventory->save();
    session()->flash('inventory-updated-message','Producto modificado con éxito.');
    return redirect()->route('inventory.datatable');


   }



}


