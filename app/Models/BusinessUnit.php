<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessUnit extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','email', 'phoneNO','BUname','systemName','deleted_at', 'created_at','updated_at'];

    public function Projects(): hasMany
    {
        return $this->hasMany(Project::class);
    }
}
