<?php

namespace Kinedu\STPTransfers\SchoolHasElectronicTransferAccount;

use Kinedu\STPTransfers\Models\SchoolEFTAccount;

trait HasElectronicTransferAccountTrait
{
    public function eftAccount()
    {
        return $this->hasOne(SchoolEFTAccount::class, 'school_id');
    }
}
