<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name', 'description', 'section_id'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    
}
