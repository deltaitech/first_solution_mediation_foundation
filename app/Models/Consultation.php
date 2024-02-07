<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $table = 'consultations';

    protected $guarded = [];

    public $timestamps = true;

    // relations start
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    // relations end

    // accessors & Mutator start
    public function getOrganizationNameAttribute($val)
    {
        return $this->attributes['organization_name'] = ucwords($val);
    }

    public function getFallingFacilityAttribute($val)
    {
        return $this->attributes['falling_facility'] = __("words." . $val);
    }

    public function getFacilityHaveFinancial()
    {
        return $this->facility_have_financial == 1 ? __('words.yes') : __('words.no');
    }

    public function getFinancialStatementsAttribute($val)
    {
        return $this->attributes['financial_statements'] = __("words." . $val);
    }
    // accessors & Mutator end
}
