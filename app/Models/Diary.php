<?php

namespace App\Models;

use App\Models\Meal;
use App\Models\Diary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diary extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(Diary::class);
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
