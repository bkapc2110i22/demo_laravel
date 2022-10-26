<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Helper\Cart;

class OrderShoppingController extends Controller
{
    public function checkout ()
    {
        $auth = auth('cus')->user();
        return view('home.checkout', compact('auth'));
    }

    public function post_checkout(Request $req, Cart $cart)
    {
        $form_data= $req->only('email','name','phone','address');
        $form_data['customer_id'] = auth('cus')->id();

        if($order = Order::create($form_data)) {

            foreach($cart->items as $item) {
                $detail_data = [
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'price' => $item->price,
                    'quantity' => $item->quantity
                ];
                OrderDetail::create($detail_data);
            }

            session(['cart' => null]);
            return redirect()->route('home.index')->with('yes','Đăng ký thành công, Vui lòng đăng nhập');
        }
        return redirect()->back()->with('no','Đăng ký thất bại, kiểm tra lại tài khoản');
    }
}
