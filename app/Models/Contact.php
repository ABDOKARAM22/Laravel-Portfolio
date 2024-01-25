<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Contact extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['location'];
    protected $fillable=['phone','email','location','behance','facebook','instegram','twitter'];
    
}
