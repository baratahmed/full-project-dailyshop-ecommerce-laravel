<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sslorder extends Model
{
    protected $fillable = ['name','email','phone','amount','address','status','transaction_id','currency'];
    //protected $guarded = [];
}
