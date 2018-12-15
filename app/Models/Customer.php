<?php
/**
 * Created by PhpStorm.
 * User: hailer
 * Date: 2018/12/15
 * Time: 18:06
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $fillable = ['id'];
}