<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;


use App\Models\Bolum;
use App\Models\Fakulte;
use App\Models\User;
use App\Models\KisiselBilgiler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;

class userController extends Controller
{
    public function index()
    {
        $data['users']=User::inRandomOrder()->get();
        return view("user.page.anasayfa",$data);
    }

    public function kullanicilar()
    {
        $data['users']=User::orderby('ad')->get();
        return view("user.page.kullaniciListele",$data);
    }
    public function profile()
    {
        $user=Auth::user();

        return view("user.page.profile",compact('user'));
    }


    public function userFind(Request $request){

        $users= User::where('ad', $request->userFind,)
            ->orWhere('ad', 'like', '%' . $request->userFind . '%')->get();

        return view('user.page.kullaniciListele',compact('users'));
    }

    public function findUser(Request $request){

        $users= User::where('ad', $request->findUser,)
            ->orWhere('ad', 'like', '%' . $request->findUser . '%')->get();

         return view('panel.page.kullaniciBul',compact('users'));
    }
    public function delete($id){
        User::find($id)->delete();

         return redirect()->route('panel.basicTable');
    }
    public function edit($id){

         $kullanici=User::find($id);

         return view('panel.page.kullaniciIslemleri',compact('kullanici'));
    }
    public function userEdit(){

        $kullanici=Auth::user();

        return view('user.page.editProfile',compact('kullanici'));
    }
    public function update(Request $request, $id){

        $user=User::find($id);
        $user->ad=$request->adı;
        $user->soyad=$request->soyadı;
        $user->email=$request->email;
        $user->fakulte=$request->fakulte;
        $user->bolum=$request->bolum;

        if( $request->password!=''){
        $request->validate([
            "sifre"=>"required|min:6",
            "sifre1"=>"required|min:6",
        ]);

        User::where('id',$request->id)->update([
            'password'=>Hash::make($request->sifre),
        ]);
        }
        $user->save();
         return redirect()->route('panel.basicTable');
    }

    public function updateProfile(Request $request){

        $user=Auth::user();

        $user->ad=$request->adı;
        $user->soyad=$request->soyadı;
        $user->email=$request->email;
        $user->fakulte=$request->fakulte;
        $user->bolum=$request->bolum;
        $user->cinsiyet=$request->cinsiyet;
        $user->getKisiselBilgiler->il_adi=$request->il;
        $user->getKisiselBilgiler->ilce_adi=$request->ilce;
        $user->getKisiselBilgiler->tel_no=$request->tel_no;
        $user->getKisiselBilgiler->meslek=$request->meslek;

        if( $request->password!=''){
        $request->validate([
            "sifre"=>"required|min:6",
            "sifre1"=>"required|min:6",
        ]);

            User::where('id',$request->id)->update([
                'password'=>Hash::make($request->sifre),
            ]);
        }
        $user->save();
        return redirect()->route('user.profile');
    }

    public function show($id)
    {

        $kullanici = User::find($id);

        return view('user.page.kullanici', compact('kullanici'));
    }
    public function register(Request $request){
        $fakultes=Fakulte::all();

        $bolums=Bolum::all();

        return view('login.register',compact('fakultes','bolums'));
    }
}
