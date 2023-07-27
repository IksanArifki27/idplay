<?php

namespace App\Models;

use App\Models\Paket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
     protected $guarded = [];
     
      public function paket(){
        return $this->hasMany(Paket::class);
    }
}
