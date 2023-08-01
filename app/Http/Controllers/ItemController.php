<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\UserItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        return redirect()->route('index');
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

    public function addToCart(Request $request, $itemId)
    {
        $user = Auth::user();
        $userItem = UserItems::where('user_id', $user->id)
                            ->where('item_id', $itemId)
                            ->first();

        if (!$userItem) {
            $userItem = new UserItems();
            $userItem->user_id = $user->id;
            $userItem->item_id = $itemId;
            $userItem->is_in_cart = true;
            $userItem->save();
        }
        
        $userItem->is_in_cart = true;
        $userItem->save();
        return redirect()->route('index')->with('success', 'Item added to cart successfully');
    }

    public function addToFavorites(Request $request, $itemId)
    {
        $user = Auth::user();
        $userItem = UserItems::where('user_id', $user->id)
                            ->where('item_id', $itemId)
                            ->first();

        if (!$userItem) {
            $userItem = new UserItems();
            $userItem->user_id = $user->id;
            $userItem->item_id = $itemId;
            $userItem->is_favorite = true;
            $userItem->save();
        } 
        $userItem->is_favorite = true;
        $userItem->save();

        return redirect()->route('index')->with('success', 'Item added to cart successfully');

    }

    public function getFavorites()
    {
        $user = Auth::user();

        $favoriteItemIds = UserItems::where('user_id', $user->id)
            ->where('is_favorite', true)
            ->pluck('item_id')
            ->toArray();
    
        $favoriteItems = Item::whereIn('id', $favoriteItemIds)->get();
        return view('items.favorites', ['favorites' => $favoriteItems]);
    }

    public function getCart()
    {
        $user = Auth::user();

        $cartItemIds = UserItems::where('user_id', $user->id)
            ->where('is_in_cart', true)
            ->pluck('item_id')
            ->toArray();

        $cartItems = Item::whereIn('id', $cartItemIds)->get();
        return view('items.cart', ['cartItems' => $cartItems]);
    }
}
