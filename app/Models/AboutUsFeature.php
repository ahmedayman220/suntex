<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutUsFeature extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'about_us_features';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const LANG_CODE_SELECT = [
        'en' => 'English',
        'ar' => 'Arabic',
        'he' => 'hebrew',
    ];

    protected $fillable = [
        'description',
        'lang_code',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
