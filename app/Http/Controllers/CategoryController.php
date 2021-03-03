<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoryy;
use App\Teacher;
class CategoryController extends Controller
{
    //
		public function category()
    {
        return view('admin.category.store');
    }
		public function store(Request $request)
    {
        $category = new Categoryy();
        $category->CategoryName =$request->CategoryName;
        $category->CategoryStatus =$request->CategoryStatus;
        $category->CategoryDescription =$request->CategoryDescription;
        $category->save();
		return redirect('/add/category')->with('message','Category info save succesfully');
		}
	
	public function manage()
    {
        $categories = Categoryy::all();
		return view('admin.category.manage',['categories'=>$categories]);
    }	
	
	public function edit($id)
    {
		$categoryById = Categoryy::where('id',$id)->first();
		return view('admin.category.edit',['categoryById'=>$categoryById]);
    }	
	
	public function update(Request $request)
    {
		//dd($request->all());
		$category = Categoryy::find($request->id);
        $category->CategoryName =$request->CategoryName;
        $category->CategoryStatus =$request->CategoryStatus;
        $category->CategoryDescription =$request->CategoryDescription;
        $category->save();
		return redirect('/manage/category')->with('message','Category info update succesfully');
	}
		
	public function delet($id)
    {
        $category = Categoryy::find($id);
        $category->delete();
		return redirect('/manage/category')->with('message','Category info deleted succesfully');
    }	
	//


	
	
}
