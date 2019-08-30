<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\manufacturer;

class ManufacturerController extends Controller
{
    public function createCategory()
    {
        return view('admin.manufacturer.createCategory');
    }
    public function storeCategory(Request $request)
    {
        $this->validate($request,[
            'manufacturerName'=>'required',
            'manufacturerDescription'=>'required'
        ]);
        
        $manufacturer = new manufacturer();
        $manufacturer->manufacturerName = $request->manufacturerName;
        $manufacturer->manufacturerDescription = $request->manufacturerDescription;
        $manufacturer->manufacturerStatus = $request->manufacturerStatus;
        $manufacturer->save();
        return redirect('/manufacturer/add')->with('message','Manufacturer info save successfully');
        
    }
    public function manageCategory(){
        $manufacturers = manufacturer::all();
        return view('admin.manufacturer.manageCategory',['manufacturers'=>$manufacturers]);
    }
    public function editCategory($id){
        $manufacturerById = manufacturer::where('id',$id)->first();
        return view('admin.manufacturer.editCategory',['manufacturerById' => $manufacturerById]);
    }
    public function updateCategory(Request $request){
        $manufacturer = manufacturer::find($request->id);
        $manufacturer->manufacturerName = $request->manufacturerName;
        $manufacturer->manufacturerDescription = $request->manufacturerDescription;
        $manufacturer->manufacturerStatus = $request->manufacturerStatus;
        $manufacturer->save();
        return redirect('/manufacturer/manage')->with('message','Manufacturer info update successfully');
    }
    public function deleteCategory($id){
        $manufacturer = manufacturer::find($id);
        $manufacturer->delete();
        return redirect('/manufacturer/manage')->with('message','Manufacturer info Delete successfully');
    }
}
