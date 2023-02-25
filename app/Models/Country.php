<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'name_en',
        'image_path',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function createdBy(){
        return $this->belongsTo('App\Models\User', 'created_by');
    }
    public function updatedBy(){
        return $this->belongsTo('App\Models\User', 'updated_by');
    }
    public function products(){
        return $this->hasMany('App\Models\Product', 'countries_id', 'id');
    }
}
