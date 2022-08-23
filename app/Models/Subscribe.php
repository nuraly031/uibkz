<?php

namespace App\Models;

use App\Http\Helpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Subscribe extends Model
{
    protected $table = 'subscribe';
    protected $primaryKey = 'subscribe_id';

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
}
