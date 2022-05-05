<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class authController extends Controller
{
    public function kullaniciGiris()
    {
        return view("login.user-login");
    }
    public function adminLogin()
    {
        return view("login.admin-login");
    }


    public function login(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

        }

        if(Auth::id()==1){
            return redirect()->route('panel.dashboard');
        }

        else{
            Auth::logout();
            return redirect()->route('admin.adminLogin')->withErrors('Email adresi veya şifre hatalı!');

        }

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('panel.select-login');
    }

public function userLogin(Request $request)
{
    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

    }

    if(Auth::id()!=1){
        return redirect()->route('user.index');
    }

    else{
        Auth::logout();
        return redirect()->route('user.userLogin')->withErrors('Email adresi veya şifre hatalı!');

    }

}
    public function userLogout(){
        Auth::logout();
        return redirect()->route('panel.select-login');
    }
    public function register(Request $request){
        $request->validate([

                'adi'=> 'required',
                'soyadi'=>  'required',
                'emaili'=>'required',
                'epostai' => 'required',
                'cinsiyeti' => 'required',
                'fakultei' => 'required',
                'bolumi' => 'required',
                'passwordi' => 'required|min:6',
                'sifrei' => 'required|min:6'
            ]
        );


       $user= User::create([

            'ad' => $request->adi,
            'soyad' => $request->soyadi,
            'email' => $request->emaili,
            'ogrenci_eposta' => $request->epostai,
            'cinsiyet' => $request->cinsiyeti,
            'fakulte' => $request->fakultei,
            'bolum' => $request->bolumi,
            'password' => Hash::make('$request->passwordi')
        ]);
           $user->save();
        return redirect()->route('user.userLogin');
    }
}
