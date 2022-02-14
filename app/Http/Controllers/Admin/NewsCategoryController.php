<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsCategoryController extends Controller
{
    
    public function index(){

        
        $categories = NewsCategory::orderBy('id','desc')->get();
        return view('admin.news.category.index',[
            'categories' => $categories
        ]);
    }

    public function create(){
        return view('admin.news.category.create');
    }


    public function store(Request $request){
    
        $request->validate([
            'category' => 'required|unique:news_categories,category',
            'status' => 'required',

        ]);

       NewsCategory::create([
            'category' => $request->category,
            'status' => $request->status,
            'created_by' => Auth::user()->role,
        ]);

        

        return back()->with('alert-success','News Category Added Successfully');
    }



    public function edit($id){
        $category = NewsCategory::where('id',$id)->first();
        return view('admin.news.category.edit',[
            'category' =>$category
        ]);
    }



    public function update(Request $request , $id){

        $category = NewsCategory::where('id',$id)->first();

        if($category->category != $request->category){
            $request->validate([
                'category' => 'required|unique:portfolio_categories,category',
                
    
            ]);
        }

        $request->validate([
            'category' => 'required',
            'status' => 'required',

        ]);
        
        NewsCategory::where('id',$id)->update([
            'category' => $request->category,
             'status' => $request->status,
             'edited_by' => Auth::user()->role,
        ]);
        

         return redirect()->route('admin.portfolio.category.index')->with('alert-success','Category update Successfully');

    }


    public function delete($id){
      


      NewsCategory::where('id',$id)->first();

    
        NewsCategory::where('id',$id)->delete();
        return back()->with('alert-success','Category Delete Successfully');
    }
}
