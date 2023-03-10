<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgRep extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'organization_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orgRole()
    {
        return $this->belongsTo(OrgRole::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }


}
