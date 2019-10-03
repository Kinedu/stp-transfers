<?php

namespace Kinedu\STPTransfers\Interfaces;

interface SupportElectronicTransfers
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
