<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_close_day extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'close_day';

    protected $fillable = [
        'id_agent', 'id_supervisor', 'total','base_before', 'from_number'
    ];
    // public $timestamps = false;
}
