<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User;

        $user->ad='Kutluhan';
        $user->soyad='İSTEK';
        $user->email='kutluhan3423@hotmail.com';
        $user->password=Hash::make('123456');
        $user->cinsiyet='erkek';
        $user->save();

    }
}
