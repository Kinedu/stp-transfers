<?php

namespace Kinedu\STPTransfers;

use Illuminate\Support\ServiceProvider;

class STPTransfersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (! class_exists('CreateEFTTypesTable')) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_eft_types_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_eft_types_table.php'),
            ], 'migrations');
        }

        if (! class_exists('CreateEFTAccountsTable')) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_eft_accounts_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_eft_accounts_table.php'),
            ], 'migrations');
        }

        if (! class_exists('CreateRecipientEFTAccountsTable')) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_recipient_eft_accounts_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_school_eft_accounts_table.php'),
            ], 'migrations');
        }

        if (! class_exists('CreateEFTTransactionsTable')) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_eft_transactions_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_eft_transactions_table.php'),
            ], 'migrations');
        }
    }
}
