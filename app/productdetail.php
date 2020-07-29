<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productdetail extends Model
{
    protected $fillable = ['productcategory','productname','productcode','productwarranty'];
}
