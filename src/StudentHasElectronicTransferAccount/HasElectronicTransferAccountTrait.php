<?php

namespace Kinedu\STPTransfers\StudentHasElectronicTransferAccount;

use Kinedu\STPTransfers\Models\StudentEFTAccount;

trait HasElectronicTransferAccountTrait
{
    public function eftAccount()
    {
        return $this->hasOne(StudentEFTAccount::class, 'student_id');
    }
}
