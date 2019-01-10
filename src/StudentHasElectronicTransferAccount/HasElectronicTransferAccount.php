<?php

namespace Kinedu\STPTransfers\StudentHasElectronicTransferAccount;

interface HasElectronicTransferAccount
{
    /**
     * Set the EFT account relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function eftAccount();

    /**
     * Determine if the model supports electronic transfers.
     *
     * @return bool
     */
    public function supportsElectronicTransfers(): bool;
}
