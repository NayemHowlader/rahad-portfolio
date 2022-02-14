<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index(){
        $newses = News::get();
        return view('admin.news.news.index',[
            'newses' => $newses
        ]);
    }


    public function create(){
        $categories = NewsCategory::get();

        return view('admin.news.news.create',[
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

      
      $news =  News::create([
            'category_name' => $request->category_name,
            'title' => $request->title,
            'details' => $request->details,
            'status' => $request->status,
            'created_by' => Auth::user()->role,

        ]);
        

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = $request->name.'_'.$news->id.'.'.$image->getClientOriginalExtension();
            $destination = public_path('photo/news/');
            $image->move($destination,$name);

            News::where('id',$news->id)->update([
                'image' => $name
            ]);

        }


        return back()->with('alert-success','News Added Successfully');

    }
    

    public function edit($id){
        $categories = NewsCategory::get();
        $news = News::where('id',$id)->first();
        return view('admin.news.news.edit',[
            'news' =>$news,
            'categories' =>$categories
            
        ]);
    }


    public function update(Request $request,$id){

        $request->validate([
          'category_name' => 'required',
           'title' => 'required',
           'details' =>'required',
            'status' => 'required',
        ]);

        News::where('id',$id)->update([
            'category_name' => $request->category_name,
             'title' =>   $request->title,
             'details' => $request->details,
             'status' =>  $request->status,
            'edited_by' => Auth::user()->role,
        ]);
      
        $news = News::where('id',$id)->first();
        if ($request->hasFile('image')) {
            //old photo delete if it is not default photo
            $old_photo_name = $news->image;
            if($old_photo_name != 'default.png'){
                $old_photo_location = public_path('photo/news/').$old_photo_name;
                unlink($old_photo_location);
            }
            //photo update
            $image = $request->file('image');
            $name = $request->id.".".$image->getClientOriginalExtension();
            $destination = public_path('photo/news/');
            $image->move($destination,$name);
            News::where('id',$id)->update([
                'image' => $name,
            ]);
           

        }
         return redirect()->route('admin.news.index')->with('alert-success','News update Successfully');

    }


    public function destroy($id){
        $news = News::where('id',$id)->first();
            // delete image
            $oldImage = $news->image;
            $oldImageLocation = public_path('photo/news/').$oldImage;
            unlink($oldImageLocation);
            $news->delete();
        return back()->with('alert-success','News Deleted Successfully');
    }

}
