<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Pessoas extends Model
{

    protected $fillable = ['nome','email'];
	protected $table = 'pessoas';

}
