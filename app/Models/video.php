<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
     protected $fillable = [
        'workShop',
        'Week_No',
        'Title',
        'Cartoon',
        'Video',
        'Teacher_name',
        'Notes',
        'Purpose',
        'Status'
     ];
      use HasFactory;

}