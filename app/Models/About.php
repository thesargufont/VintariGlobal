<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'history',
        'history_en',
        'visi',
        'visi_en',
        'misi',
        'misi_en',
        'image_path',
        'url_alibaba',
        'telp',
        'email',
        'product_sold',
        'countries_sold',
        'client',
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
}
