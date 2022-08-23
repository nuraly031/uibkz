<?php

namespace App\Models;

use App\Http\Helpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Fertilizer extends Model
{
    protected $table = 'fertilizer';
    protected $primaryKey = 'fertilizer_id';

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
}
