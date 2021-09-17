<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $primaryKey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','description','cover','category_id','language_id','user_id','repository'
    ];

    // product belong to one User 
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // product belong to one Language mainly 
    public function language()
    {
        return $this->belongsTo(Language::class);

    }


    // product belong to one Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}


 // return $this->hasOne(Language::class);
        // return $this->hasManyThrough(
        //     Project::class,
        //     Middle::class,
        //     'didui_id',
        //     'kdkdk_id'
        //  );