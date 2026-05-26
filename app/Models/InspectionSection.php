<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InspectionSection extends Model
{
    protected $table = 'inspection_sections';
    // protected $appends = ['encrypt_id'];
    protected $fillable = ['code', 'perkara', 'sort'];

    
    // public function getEncryptIdAttribute()
    // {
    //     return encrypt($this->id);
    // }

    public function components()
    {
        return $this->hasMany(InspectionComponent::class, 'section_id');
    }
}

