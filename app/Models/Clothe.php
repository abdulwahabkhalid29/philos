<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    use HasFactory;    
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function clotheCount(){
        $clothe = clothe::where('status',1)->count();
        return $clothe;
    }


}
