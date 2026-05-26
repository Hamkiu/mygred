<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaklumatPremis extends Model
{
    protected $table = 'maklumat_premis';
    protected $fillable = ['nombakaun', 'nomserial', 'codeakaun', 'namamilik', 'namasyrkt', 'pdaftaran', 'alamatbus', 'telephone', 'rujukfail', 'jalancode', 'permitodc', 'nomborssm', 'latitudss', 'longtitud', 'jalanname', 'statuslsn', 'zonelesen'];

    public function inspectionMains()
    {
        return $this->hasMany(InspectionMain::class, 'premis_id');
    }
}
