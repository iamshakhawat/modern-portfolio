<?php

namespace App\Models;

use App\Models\User;
use App\Models\Skill;
use App\Models\Category;
use App\Models\ImageProject;
use App\Models\ProjectSkill;
use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(ImageProject::class);
    }
}
