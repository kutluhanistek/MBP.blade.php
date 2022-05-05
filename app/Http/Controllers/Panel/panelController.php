<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class panelController extends Controller
{
    public function index()
    {
        /*  $user=new User();
          $user->ogrenci_no='190290006';
          $user->ad='Özge';
          $user->soyad='ASLAN';
          $user->email='ozge@hotmail.com';
          $user->ogrenci_eposta='19029006@firat.edu.tr';
          $user->cinsiyet='kadın';
          $user->fakulte='Mühendislik';
          $user->bolum='Yazılım';
          $user->password=Hash::make('123456');
          $user->save();*/

        return view("panel.layout");
    }

    public function dashboard()
    {

        return view("panel.page.dashboard");
    }

    public function adminLogin()
    {
        return view("login.admin-login");
    }

    public function show($id)
    {

        $kullanici = User::find($id);

        return view('panel.page.kullaniciGoruntule', compact('kullanici'));
    }

    public function userShow()
    {


        return view("panel.page.kullaniciGoruntule");
    }


    public function profile()
    {
        $user = User::where('id', 1)->first();

        return view("panel.page.profile", array('user' => $user));
    }

    public function basicTable()
    {
        $data['users'] = User::inRandomOrder()->get();
        return view("panel.page.basic-table", $data);
    }

    public function selectLogin()
    {
        return view("login.select-login");
    }

    public function edit($id)
    {

        $kullanici = User::find($id);

        return view('panel.page.adminGuncelle', compact('kullanici'));
    }
    public function userEdit($id)
    {

        $kullanici = User::find($id);

        return view('panel.page.kullaniciIslemleri', compact('kullanici'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->ad = $request->adı;
        $user->soyad = $request->soyadı;
        $user->email = $request->email;
        if ($request->password != '') {
            $request->validate([
                "sifre" => "required|min:6",
                "sifre1" => "required|min:6",
            ]);
            if ($request->password != '') {
                User::where('id', $request->id)->update([
                    'password' => Hash::make($request->sifre),
                ]);
            }
            $user->save();
            return redirect()->route('panel.basicTable');
        }
        $user->save();
    }
}
