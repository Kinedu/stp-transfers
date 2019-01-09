<?php

namespace Kinedu\STPTransfers\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolEFTAccount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'school_eft_accounts';

    protected $guarded = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'account_requested_at',
    ];
}
