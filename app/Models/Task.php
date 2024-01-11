<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $fillable = ['title', 'description', 'user_id', 'created_at'];
    public $timestamps = true;
    public static function getAll()
    {
        return self::all();
    }
    

    // Accessor method to get a formatted created_at date
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('Y-m-d H:i:s');
    }

    // Mutator method to convert the title to uppercase before saving
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }

    // Custom query scope to retrieve completed tasks
    public function scopeCompleted($query)
    {
        return $query->where('completed', true);
    }
    
}
