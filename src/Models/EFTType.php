<?php

namespace Kinedu\STPTransfers\Models;

use Illuminate\Database\Eloquent\Model;

class EFTType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eft_types';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        //
    ];
}
