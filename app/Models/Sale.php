<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';

    public function good()
    {
        return $this->hasMany('App\Models\Good','sales_id');
    }
}