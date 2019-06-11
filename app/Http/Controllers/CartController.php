<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\OrderItem;

class CartController extends Controller
{

    public function __construct(){
        if(!\Session::has('cart')) \Session::put('cart',array());
    }

    //show cart
    public function show(){
        $cart = \Session::get('cart');
        $total = $this->total();
        //dd($cart);
        
        return view('store.cart', compact('cart', 'total'));
    }

    //add item
    public function add(Product $product){
        $cart = \Session::get('cart');
        $product->quantity = 1;
        $cart[$product->slug] = $product;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    //delete item
    public function delete(Product $product){
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    //trash car
    public function trash(){
        \Session::forget('cart');
        //dd($cart);
        return redirect()->route('cart-show');
    }

    //update item
    public function update($slug, $quantity){
        $cart = \Session::get('cart');
        
        $cart[$slug]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    //detail
    public function orderdetail(){
        if(count(\Session::get('cart')) <= 0){
            return redirect()->route('home');
        }

            $cart = \Session::get('cart');
            $total = $this->total();
            //dd($cart);
            
            return view('store.order-detail', compact('cart', 'total'));
        
    }

    //comprar
    public function buy(){
        $this->saveorder();
        \Session::forget('cart');

        return redirect()->route('home')->with('message','Compra realizada de forma correcta');
        
    }

    //total
    private function total(){
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->price*$item->quantity;
        }
        return $total;
    }

    //save order
    protected function saveorder(){
        $cart = \Session::get('cart');
        $subtotal = 0;
        $shipping = 100;

        foreach($cart as $product){
            $subtotal += $product->price * $product->quantity;
        }
        
        $order = Order::create(
            [
                'subtotal' => $subtotal,
                'shipping' => $shipping,
                'user_id' => \Auth::user()->id,
            ]
            );
        
        foreach($cart as $product){
            $this->saveorderitem($product, $order->id);
        }
    }

    //save order
    protected function saveorderitem(Product $product, $order_id){
        
        OrderItem::create(
            [
                'price' => $product->price,
                'quantity' => $product->quantity,
                'product_id' => $product->id,
                'order_id' => $order_id,
            ]
            );
        
        
    }
}
