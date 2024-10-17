<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{
    use HasFactory;
    protected $table    = 'setting_translations';
    // protected $fillable = ['footer_description' , 'settings_id'];
    protected $guarded = [];

    public function setting()
    {
        return $this->belongsTo( Setting::class , 'setting_id' );
    }
}
