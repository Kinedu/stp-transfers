<?php

namespace Kinedu\STPTransfers;

use Illuminate\Support\ServiceProvider;

class STPTransfersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (! class_exists('CreateStudentSTPDetailsTable')) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_student_stp_details_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_student_stp_details_table.php'),
            ], 'migrations');
        }

        if (! class_exists('CreateSchoolSTPDetailsTable')) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_school_stp_details_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_school_stp_details_table.php'),
            ], 'migrations');
        }

        if (! class_exists('CreateSTPTransactionsTable')) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_stp_transactions_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_stp_transactions_table.php'),
            ], 'migrations');
        }
    }
}
