<?php

namespace Kinedu\STPTransfers\Models;

use Illuminate\Database\Eloquent\Model;

class STPTransaction extends Model
{
    protected $table = 'eft_transactions';

    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'details' => 'json',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'operation_date',
    ];

    public function transactionDetails($key = null)
    {
        $details = $this->STPTransactionDetails();

        return $key ? $details->get($key) : $details;
    }

    public function STPTransactionDetails()
    {
        return new STPTransactionDetails($this->details ?? [], $this);
    }
}
