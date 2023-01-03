<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'categories_id',
        'countries_id',
        'title',
        'description',
        'description_en',
        'best_selling',
        'image_path1',
        'image_path2',
        'image_path3',
        'image_path4',
        'image_path5',
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
    public function country(){
        return $this->belongsTo('App\Models\Country', 'countries_id');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category', 'categories_id');
    }
}
