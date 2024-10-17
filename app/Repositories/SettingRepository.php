<?php

namespace App\Repositories;

use App\Models\Setting;
use App\Repositories\BaseRepository;

class SettingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'app_name',
        'logo',
        'footer_logo',
        'location',
        'points_price'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Setting::class;
    }
}
