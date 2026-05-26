<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InspectionComponentItem extends Model
{
    protected $table = 'inspection_component_items';
    // protected $appends = ['encrypt_id'];
    protected $fillable = ['component_id', 'description', 'markah', 'sort'];

    // public function getEncryptIdAttribute()
    // {
    //     return encrypt($this->id);
    // }

    public function component()
    {
        return $this->belongsTo(InspectionComponent::class, 'component_id');
    }
}
