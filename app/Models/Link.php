<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    public $exists = ['link_id', 'linked_list', 'description', 'description_full'];
    protected $fillable = ['linked_list', 'description', 'description_full'];
    protected $casts = [
        'linked_list' => 'array'
    ];
    protected $primaryKey = 'link_id';
}
