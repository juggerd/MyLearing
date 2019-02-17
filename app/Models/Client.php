<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function reestrs(){
      return $this->hasMany(Reestr::class);
    }
}
