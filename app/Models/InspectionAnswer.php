<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InspectionAnswer extends Model
{
    protected $table = 'inspection_answers';
    protected $fillable = ['main_id', 'component_id', 'component_item_id', 'is_patuh', 'markah_diperolehi', 'demerit', 'catatan'];

    public function main()
    {
        return $this->belongsTo(InspectionMain::class, 'main_id');
    }

    public function component()
    {
        return $this->belongsTo(InspectionComponent::class, 'component_id');
    }

    public function item()
    {
        return $this->belongsTo(InspectionComponentItem::class, 'component_item_id');
    }
}
