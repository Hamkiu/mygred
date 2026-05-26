<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InspectionComponent extends Model
{
    protected $table = 'inspection_components';
    // protected $appends = ['encrypt_id'];
    protected $fillable = ['section_id', 'code', 'name', 'catatan', 'markah', 'has_items', 'sort'];

    // public function getEncryptIdAttribute()
    // {
    //     return encrypt($this->id);
    // }

    public function section()
    {
        return $this->belongsTo(InspectionSection::class, 'section_id');
    }

    public function items()
    {
        return $this->hasMany(InspectionComponentItem::class, 'component_id');
    }
}
