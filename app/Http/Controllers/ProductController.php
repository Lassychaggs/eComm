<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products',compact('products'));
    }

    public function detail($id){
        $data = Product::find($id);
        return view('detail',compact('data'));
       
    }

    public function search(Request $req){
         
       $products = Product::
        where('name','like','%'.$req->input('search').'%')
        ->orWhere('category','like','%'.$req->input('search').'%')
        ->orWhere('description','like','%'.$req->input('search').'%')
        ->get();
       return view('search',compact('products')); 
    }
    public function addCart(Request $req){
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->userid = $req->session()->get('user')['id'];
            $cart->productid = $req->productid;
            $cart->save();

            return redirect('/');
        }
        else 
        return redirect('login');
    }

    static function cartItem(){
        $userID = Session::get('user')['id'];
        return Cart::where('userid',$userID)->count();
    }

    public function viewCart(){
        $userID = Session::get('user')['id'];
        $products = DB::table('carts')
        ->join('products','carts.productid','products.id')
        ->where('carts.userid',$userID)
        ->select('products.*','carts.id as cartid')
        ->get();
        return view('cart',compact('products'));
    }

    public function removeCart($id){
            Cart::destroy($id);
            return redirect()->back();
    }

    public function orderNow(){
        $userID = Session::get('user')['id'];
        $total = DB::table('carts')
        ->join('products','carts.productid','products.id')
        ->where('carts.userid',$userID)
        ->sum('products.price');
        return view('ordernow',compact('total'));
    }
    public function orderconfirm(Request $req){
        $userID = Session::get('user')['id'];
        $totalCart = Cart::where('userid',$userID)->get();
        foreach($totalCart as $cart){
            $order = new Order;
            $order->productid = $cart->productid;
            $order->userid = $cart->userid;
            $order->status = 'pending';
            $order->paymentmethod = $req->payment;
            $order->paymentstatus='Pending';
            $order->address = $req->address;
            $order->save();
            Cart::where('userid',$userID)->delete();
        }
        
        return redirect('/');
    }

    public function myOrders(){
        $userID = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.productid','products.id')
        ->where('orders.userid',$userID)
        ->get();
        return view('myorders',compact('orders'));

    }

}
