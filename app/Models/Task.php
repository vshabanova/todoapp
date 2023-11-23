<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';

    protected $fillable = ['title', 'description'];

    public $timestamps = true;

    public static function create(){
        $attributes = [
            'title'=> $this->title,
            'description'=> $this->description
        ];
        
        $task = new Task($attributes);
    }
}
