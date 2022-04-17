<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $table = 'words';
    protected $fillable = ['word', 'language_id', 'grammar'];
    public $exists = ['word_id', 'word', 'language_id', 'grammar', 'affixes', 'stem', 'lemma', 'description', 'description_full'];

    protected $casts = [
        'grammar' => 'array',
        'affixes' => 'array'
    ];
    protected $primaryKey = 'word_id';

    public function language_code(): string {
        return $this->belongsTo(\App\Models\Language::class, 'language_id')->get()[0]->language_code;
    }

    public static function words_array(): Array {
        return Word::all()->map(function (Word $word) {
           return array_merge($word->toArray(), ['language_code' => $word->language_code()]);
        })->toArray();
    }
}
