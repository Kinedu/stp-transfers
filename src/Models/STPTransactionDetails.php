<?php

namespace Kinedu\STPTransfers\Models;

class STPTransactionDetails extends JsonColumn implements JsonColumnInterface
{
    /** @var array */
    protected $details;

    /** @var \Kinedu\STPTransfers\Models\STPTransaction */
    protected $transaction;

    /**
     * The list of fillable properties.
     *
     * @var array
     */
    protected $allowed = [
        'payment_description',
        'sender_payment_type',
        'recipient_payment_type',
        'payment_type',
        'sender_bank_id',
        'recipient_bank_id',
    ];

    public function __construct(array $details, STPTransaction $transaction)
    {
        $this->details = $details;
        $this->transaction = $transaction;
    }

    /**
     * Persist the transaction details.
     *
     * @return bool
     */
    protected function persist()
    {
        return $this->transaction->update([
            'details' => $this->details,
        ]);
    }
}
