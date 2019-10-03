<?php

namespace Kinedu\STPTransfers\Traits;

trait SupportElectronicTransfersTrait
{
    use HasElectronicTransferAccountTrait;

    /**
     * Determine if the model supports electronic transfers.
     *
     * @return bool
     */
    public function supportsElectronicTransfers(): bool
    {
        return true;
    }
}
