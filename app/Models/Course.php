<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author',
        'url'
    ];

    protected function title():Attribute {
        return new Attribute(
            get: fn($value) => strtoupper($value),
            set: fn($value) => $value
        );
    }

    public function author(){
        return $this->hasOne(User::class,'id','author_id');
    }
}