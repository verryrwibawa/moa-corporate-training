<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateTraining extends Model
{
    use HasFactory;
    protected $table = "corporate_training";
    protected $guarded = ['id'];
    public $timestamps = false;
}
