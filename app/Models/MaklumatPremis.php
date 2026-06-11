<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaklumatPremis extends Model
{
    protected $table = 'maklumat_premis';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'nombakaun', 'oracle_id', 'nomserial', 'codeakaun', 'namamilik', 'namasyrkt', 'pdaftaran', 'alamatbus', 'telephone', 'rujukfail', 'jalancode', 'permitodc', 'nomborssm', 'latituds', 'longtitud', 'jalanname', 'statuslsn', 'zonelesen'];

    public function inspectionMains()
    {
        return $this->hasMany(InspectionMain::class, 'premis_id');
    }
}
