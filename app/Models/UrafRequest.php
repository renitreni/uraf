<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrafRequest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'uraf_requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'passport_no',
        'other_id_no',
        'e_mail_or_facebook_name',
        'occupation',
        'phone_no',
        'location_abroad',
        'employer_name',
        'employer_phone_no',
        'recruitment_agency_name_abroad',
        'recruitment_agency_name_local',
        'complaint',
        'location_lat',
        'location_lng',
        'upload_1',
        'upload_2',
        'upload_3',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'location_lat' => 'decimal:8',
            'location_lng' => 'decimal:8',
        ];
    }
}
