<?php

namespace App\Models;

use App\Http\Helpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'category_id';

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
