<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakulte extends Model
{
    use HasFactory;
    public function getBolum()
    {

        return $this->belongsTo(Bolum::class,"fakulte_id","id");

    }


}
