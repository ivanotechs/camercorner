<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teams extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'image',
        'name',
        'description'
    ];
    public $timestamps = true;


    public function coverImage(){
        return asset('storage/'.$this->image);
    }
}
