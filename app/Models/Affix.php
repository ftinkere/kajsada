<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affix extends Model
{
    use HasFactory;
    protected $table = 'affixes';
    public $exists = ['affix_id', 'affix', 'position', 'language_id', 'grammar', 'description', 'description_full'];
    protected $fillable = ['affix', 'position', 'language_id', 'grammar', 'description', 'description_full'];

    protected $casts = ['grammar' => 'array'];
    protected $primaryKey = 'affix_id';
}
