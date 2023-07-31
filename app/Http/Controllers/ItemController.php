<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function landing(){
        return view('landing');
    }
    public function index(){
        $items = Item::get();
        return view('items.index',['items'=>$items]);
    }

    public function create(){
        return view('items.create');
    }

    public function store(Request $request){

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'category'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]
        );
        $imageName = time().'.'.$request->image->extension();
        $request -> image->move(public_path('items'),$imageName);
        $item = new Item;
        $item->image =$imageName;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->category = $request->category;
        $item->save();

        return back()->withSuccess('Item Added');
    }

    public function edit($id){
        $item=Item::where('id',$id)->first();
        return view('items.edit',['item'=>$item]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'category'=>'required',
            'price'=>'required',
            'image'=>'nullable',
        ]);
        $item=Item::where('id',$id)->first();
        $imageName = $item->image;
        if(isset($request->image)){ 
            $imageName = time().'.'.$request->image->extension();
            $request -> image->move(public_path('items'),$imageName);
            $item->image =$imageName;
        }
        $item->title = $request->title;
        $item->description = $request->description;
        $item->image =$imageName;
        $item->price = $request->price;
        $item->category = $request->category;
        $item->save();

        return back()->withSuccess('Item Updated');
    }

    public function destroy($id){
       $item = Item::where('id',$id)->first();
       $item->delete();
       return back()->withSuccess('Item Deleted');
    }
}
