<?php

namespace Kinedu\STPTransfers\Traits;

use Kinedu\STPTransfers\Models\EFTAccount;

trait HasElectronicTransferAccountTrait
{
    public function eftAccount()
    {
        return $this->hasOne(EFTAccount::class, 'student_id');
    }
}
