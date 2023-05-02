<?php

namespace App\Models;

use App\Enum\Category;
use App\Enum\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'status', 'category', 'description'
    ];

    public function status(): Attribute
    {
        return Attribute::make(
            get: fn ($status) => ($status === Status::ACTIVE) ? 'active' : 'inactive',
            set: fn($status) => ($status === 'active') ? Status::ACTIVE->value : Status::INACTIVE->value
        );
    }

    public function category(): Attribute
    {
        return Attribute::make(
            get: fn ($category) => ($category === Category::FRONTEND) ? 'front' : 'back',
            set: fn($category) => ($category === 'front') ? Category::FRONTEND->value : Category::BACKEND->value
        );
    }
}
