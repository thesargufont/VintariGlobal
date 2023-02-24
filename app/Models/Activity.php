<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activites';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'title',
        'title_en',
        'articles',
        'articles_en',
        'image_path1',
        'image_path2',
        'image_path3',
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
