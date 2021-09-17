<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Language extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['langName'];


    // A language has many project
    public function project()
    {
        return $this->hasMany(Project::class);
        // return $this->belongsTo(Project::class);

    }
}




    // return $this->hasManyThrough(Project::class);
