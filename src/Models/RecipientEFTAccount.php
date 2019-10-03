<?php

namespace Kinedu\STPTransfers\Models;

use Illuminate\Database\Eloquent\Model;

class RecipientEFTAccount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recipient_eft_accounts';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        //
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'account_requested_at',
    ];
}
