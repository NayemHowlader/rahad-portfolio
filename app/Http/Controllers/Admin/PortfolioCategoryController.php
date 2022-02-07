<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use App\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class PortfolioCategoryController extends Controller
{
    
    public function index(){

        
        $categories = PortfolioCategory::get();
        return view('admin.portfolio.category.index',[
            'categories' => $categories
        ]);
    }

    public function create(){
        return view('admin.portfolio.category.create');
    }


    public function store(Request $request){
    
        $request->validate([
            'category' => 'required|unique:portfolio_categories,category',
            'status' => 'required',

        ]);

       PortfolioCategory::create([
            'category' => $request->category,
            'status' => $request->status,
            'created_by' => Auth::user()->role,
        ]);

        

        return back()->with('alert-success','Category Added Successfully');
    }



    public function edit($id){
        $category = PortfolioCategory::where('id',$id)->first();
        return view('admin.portfolio.category.edit',[
            'category' =>$category
        ]);
    }



    public function update(Request $request , $id){

        $category = PortfolioCategory::where('id',$id)->first();

        if($category->category != $request->category){
            $request->validate([
                'category' => 'required|unique:portfolio_categories,category',
                
    
            ]);
        }

        $request->validate([
            'category' => 'required',
            'status' => 'required',

        ]);
        
        PortfolioCategory::where('id',$id)->update([
            'category' => $request->category,
             'status' => $request->status,
             'edited_by' => Auth::user()->role,
        ]);
        

         return redirect()->route('admin.portfolio.category.index')->with('alert-success','Category update Successfully');

    }


    public function delete($id){
      


      PortfolioCategory::where('id',$id)->first();

    
        PortfolioCategory::where('id',$id)->delete();
        return back()->with('alert-success','Category Delete Successfully');
    }

}
