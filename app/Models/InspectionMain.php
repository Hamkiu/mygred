<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InspectionMain extends Model
{
    protected $table = 'inspection_mains';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'premis_id', 'user_id', 'tarikh_periksa', 'masa_mula', 'masa_tamat', 'bil_tempatan_lelaki', 'bil_tempatan_perempuan', 'bil_asing_lelaki', 'bil_asing_perempuan', 'kursus_kendalimakanan', 'suntikan_tifoid', 'status_gt', 'surat_amaran', 'no_kompaun', 'nilai_kompaun', 'no_sijil', 'markah', 'gred', 'status_ccp', 'tandas', 'jumlah_star', 'catatan', 'tarikh_tamat','source'];

    public function premis()
    {
        return $this->belongsTo(MaklumatPremis::class, 'premis_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');    
    }

    public function answers()
    {
        return $this->hasMany(InspectionAnswer::class, 'main_id');
    }
}
