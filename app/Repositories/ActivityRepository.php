<?php

namespace App\Repositories;

use App\Models\Activity;
use App\Repositories\BaseRepository;

class ActivityRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'facility_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Activity::class;
    }
}
