<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Series extends Model
{
    use SoftDeletes;
    protected $table = 'invs_item_series';
    protected $fillable = [
        'invs_item_company_id',
        'name'
    ];
    protected $dates = ['deleted_at'];
}
