<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use App\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::get();
        return view('admin.portfolio.portfolio.index',[
            'portfolios' => $portfolios
        ]);
    }


    public function create(){
        $categories = PortfolioCategory::get();

        return view('admin.portfolio.portfolio.create',[
            'categories' => $categories
        ]);
    }

    public function store(Request $request){
        
        $request->validate([
            
            'category_name' => 'required',
            'title' => 'required',
            'details' => 'required',
            'status' => 'required',
            
        ]);
        // dd($request->all());
      $portfolio =  Portfolio::create([
            'category_name' => $request->category_name,
            'title' => $request->title,
            'details' => $request->details,
            'status' => $request->status,
            'created_by' => Auth::user()->role,

        ]);
        

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = $request->name.'_'.$portfolio->id.'.'.$image->getClientOriginalExtension();
            $destination = public_path('photo/portfolio/');
            $image->move($destination,$name);

            Portfolio::where('id',$portfolio->id)->update([
                'image' => $name
            ]);

        }


        return back()->with('alert-success','Portfolio Added Successfully');

    }
    

    public function edit($id){
        $categories = PortfolioCategory::get();
        $portfolio = Portfolio::where('id',$id)->first();
        return view('admin.portfolio.portfolio.edit',[
            'portfolio' =>$portfolio,
            'categories' =>$categories
            
        ]);
    }


    public function update(Request $request , $id){

        $portfolio = Portfolio::where('id',$id)->first();

        $request->validate([
            'category_name' => 'required',
            'title' => 'required',
            'details' =>'required',
            'status' =>'required'

        ]);
        
     $portfolio =   Portfolio::where('id',$id)->update([
            'category_name' => $request->category_name,
             'title' =>   $request->title,
             'details' => $request->details,
             'status' =>  $request->status,
             'edited_by' => Auth::user()->role,
        ]);
        


        if ($request->hasFile('image')) {
            //old photo delete if it is not default photo
            $old_photo_name = $portfolio->image;
            if($old_photo_name != 'default.png'){
                $old_photo_location = public_path('photo/portfolio/').$old_photo_name;
                unlink($old_photo_location);
            }
            //photo update
            $image = $request->file('image');
            $name = $portfolio->name.'_'.$portfolio->id.".".$image->getClientOriginalExtension();
            $destination = public_path('photo/portfolio/');
            $image->move($destination,$name);
            Portfolio::where('id',$id)->update([
                'image' => $name,
            ]);

        }

         return redirect()->route('admin.portfolio.index')->with('alert-success','Category update Successfully');

    }


}
