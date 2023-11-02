<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = array('name', 'description', 'start_date', 'end_date', 'image_url');

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
