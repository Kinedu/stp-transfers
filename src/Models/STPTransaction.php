<?php

namespace Kinedu\STPTransfers\Models;

use Illuminate\Database\Eloquent\Model;

class STPTransaction extends Model
{
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

    public function details($key = null)
    {
        $details = $this->transactionDetails();

        return $key ? $details->get($key) : $details;
    }

    public function transactionDetails()
    {
        return new STPTransactionDetails($this->details ?? [], $this);
    }
}
