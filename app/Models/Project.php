<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['projectname','PICname', 'startDate','endDate','projectStatus','projectDescription', 'deleted_at', 'created_at','updated_at'];

    public function BusinessUnits(): belongsTo
    {
        return $this->belongsTo(BusinessUnit::class);
    }
}
