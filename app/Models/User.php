<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{

    use HasFactory;
    public function getKisiselBilgiler()
    {
        return $this->hasOne(KisiselBilgiler::class,"ogrenci_id","id");
    }
    protected $table="users";
    protected $fillable=["id","ogrenci_no","ad","soyad","ogrenci_eposta","email","password","cinsiyet","fakulte","bolum"];


}
