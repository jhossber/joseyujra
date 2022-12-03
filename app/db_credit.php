<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_credit extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'credit';

    protected $fillable = [
        'amount_neto', 'order_list', 'id_user','id_agent', 'payment_number', 'utility', 'status'
    ];
}
