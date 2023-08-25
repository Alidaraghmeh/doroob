<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image',"section_id",'description'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
