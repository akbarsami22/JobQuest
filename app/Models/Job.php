<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function job_type(){
        return $this->belongsTo(JobType::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function applicaiton(){
        return $this->hasMany(JobApplication::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}