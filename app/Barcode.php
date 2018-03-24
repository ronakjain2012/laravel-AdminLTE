<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Barcode extends Model
{
    use SoftDeletes;
    protected $table = 'invs_barcodes';
    protected $fillable = [
        'company_id',
        'series_id',
        'model_id',
        'name',
        'about'
    ];
    protected $dates = ['deleted_at'];
}
