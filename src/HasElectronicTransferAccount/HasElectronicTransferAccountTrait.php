<?php

namespace Kinedu\STPTransfers\HasElectronicTransferAccount;

use Kinedu\STPTransfers\Models\SchoolEFTAccount;

trait HasElectronicTransferAccountTrait
{
    public function eftAccount()
    {
        return $this->hasOne(SchoolEFTAccount::class, 'school_id');
    }
}
