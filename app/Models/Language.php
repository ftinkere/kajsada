<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $fillable = ['language_code', 'language_name', 'description', 'description_full'];
    public $exists = ['language_id', 'language_code', 'language_name', 'description', 'description_full'];
    protected $table = 'languages';
    protected $primaryKey = 'language_id';
}
