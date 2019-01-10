<?php

namespace Kinedu\STPTransfers\Models;

use Illuminate\Database\Eloquent\Model;

class StudentEFTAccount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_eft_accounts';

    protected $guarded = [];
}
