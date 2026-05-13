<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kompaun extends Model
{
    protected $connection = 'oracle';

    protected $table = 'SPLN.PLN_NILAIKOMP';

    // protected $primaryKey = 'NIL_NILAICODE';

    public $timestamps = false;

    protected $fillable = [
        'NIL_NILAICODE',
        'NIL_NILAIKOMP',
        'NIL_SYSTEMIDS',
        'NIL_TINDAKANS',
        'NIL_ENTRYOPER',
        'NIL_ENTRYDATE',
        'NIL_MODFYOPER',
        'NIL_MODFYDATE',
    ];

    protected $casts = [
        'NIL_NILAICODE' => 'string',
        'NIL_NILAIKOMP' => 'float',
        'NIL_ENTRYDATE' => 'datetime',
        'NIL_MODFYDATE' => 'datetime',
    ];
}