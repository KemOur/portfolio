<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'title',
        'creation_date',
        'image',
        'description',
        'visit',
        'projects_category_id',
    ];
}
