<?php

namespace App\Models;

use App\Http\Helpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class FertilizerCategory extends Model
{
    protected $table = 'fertilizer_category';
    protected $primaryKey = 'fertilizer_category_id';

}
