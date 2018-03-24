<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemModel extends Model
{
    use SoftDeletes;
    protected $table = 'invs_item_model';
    protected $fillable = [
        'invs_item_company_id',
        'invs_item_series_id',
        'name'
    ];
    protected $dates = ['deleted_at'];
}
