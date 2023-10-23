<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function login()
    {
        return view('login');
        
    }
    public function addproduct(Request $request, $id)
    {
        $user =Auth::guard('signup')->user();
        $userId=$user->id;
        $data = category::all();
        $products=product::where('id',$id)->get();
        return view('addproduct', compact('data', 'products','userId'));
    }
    public function home()
    {
        $products = Product::inRandomOrder()->limit(6)->get(); // Retrieve 6 random products
        $data = Category::all();
    
        return view('home', compact('data', 'products'));
    }
    

    public function contactus()
    {
        $data = category::all();
        return view('contactus', compact('data'));
    }
    public function buynow(Request $request, $id)
    {
        $data = category::all();
        $category=category::where('id',$id)->get();
        $product = product::where('category_id', $id)->get();
        return view('buynow', compact( 'data','category','product'));
    }

    public function cart_add(Request $request)
    {
       $uid = $request->get('userid');
       $prodid = $request->get('productid');
     $prodstock = $request->get('productstock');
        $qty = $request->get('quantity');


        $add = new cart;
        if($request->isMethod('POST'))
        {
            if($qty>0 && $qty<=$prodstock)
            {
                product::where('id',$prodid)->decrement('pstock', $qty);
                $add->userid = $uid;
                $add->productid = $prodid;
                $add->quantity = $qty;
         
                $add->save();
            }
            
            elseif(empty($qty))
            {
                return redirect()->back()->with('errorr','Please enter a quantity');
            }
            else
            {
                return redirect()->back()->with('error','Quantity must be within the range');
            }
        }
      return redirect()->back()->with('Success','Added to cart successfully');

    }

}
