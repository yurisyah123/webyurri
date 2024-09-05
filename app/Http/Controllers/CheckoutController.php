<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show()
    {
        return view('checkout');
    }
    public function store(Request $request)
    {
        $validated = $request->valitadate([
            'name'=> 'required|string',
            'email'=>'required|string',
            'address'=>'required|string',
            'payment_type'=>'required|string',
            'total_amout'=>'required|string',
        ]);

    //    Order::create($validated);

        return redirect('checkout/information');
    }

    public function confirmation()

    {
        return view('checkout-confirm');
    }


}
