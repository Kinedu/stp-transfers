<?php

namespace Kinedu\STPTransfers\Models;

interface JsonColumnInterface
{
    /**
     * Persist changes to the database.
     *
     * @return bool
     */
    public function persist();
}
