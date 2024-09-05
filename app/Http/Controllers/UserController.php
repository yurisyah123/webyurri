<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\product;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\keranjang;
class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function keranjang(){
        return view('keranjang');
    }


    public function detailproduct(){
        return view('detailproduct');
    }

    public function checkout(){
        return view('checkout');
    }

    public function berhasil(){
        return view('berhasil');
    }

    public function Auth(Request $request){
        $validate = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($validate)) {
            return redirect('/user');
        }
        return redirect()->back()->with('pesan login','maaf login anda gagal');
    }
    public function show(Request $request)
    {
    $user = auth()->user();
    $data['product'] = product::find($request->id);
    return view('user-show',compact('user'),$data);
    }

    public function user(Request $request){
        $data['user']=User::all();
        $data['product']= product::all();
        $data['total_user']=$data['user']->count();
        //  dd($data['product']);
        return view('user', $data);
    }

    
}
