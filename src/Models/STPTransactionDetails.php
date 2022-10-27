<?php

namespace Kinedu\STPTransfers\Models;

class STPTransactionDetails extends JsonColumn
{
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
        'folio_codi',
    ];

    public function __construct(array $jsonAttributes, STPTransaction $transaction)
    {
        $this->jsonAttributes = $jsonAttributes;
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
            'details' => $this->jsonAttributes,
        ]);
    }
}
