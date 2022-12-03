<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_bills extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'bills';
    protected $fillable = ["description", "id_agent", "amount", "type", "id_wallet"];
    // public $timestamps = false;
}
