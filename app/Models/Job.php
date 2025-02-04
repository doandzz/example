<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Support\Arr;


class Job extends Model {
    use HasFactory;
    protected $table ="job_listing";
    protected $fillable =["salary","title"];
    public function employer(){
        return $this-> belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey:"job_listing_id");
    }
    
}