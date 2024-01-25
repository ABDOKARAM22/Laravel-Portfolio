<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Team extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['first_name','last_name','job_title'];
    protected $fillable=['first_name','last_name','job_title','image'];
}
