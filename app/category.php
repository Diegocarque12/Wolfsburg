<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function productMenu(){
    	return $this->hasMany(productMenu::class);
    }
}
