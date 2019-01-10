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
}
