<?php

namespace App\Models;

use App\Http\Helpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Rubric extends Model
{
    protected $table = 'info';
    protected $primaryKey = 'rubric_id';

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
