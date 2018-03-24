<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    protected $table = 'invs_item_company';
    protected $fillable = [
        'name'
    ];
    protected $dates = ['deleted_at'];
}
