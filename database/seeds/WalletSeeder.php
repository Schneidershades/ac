<?php

use Illuminate\Database\Seeder;
use App\Models\Wallet;
class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallet::Create([
        	'user_id'                            => 1,
            'balance'                            => 10,
        ]);

        Wallet::Create([
        	'user_id'                            => 2,
        	'balance'                            => 10,
        ]);

        Wallet::Create([
        	'user_id'                            => 3,
            'balance'                            => 10,
        ]);


        Wallet::Create([
        	'user_id'                            => 4,
            'balance'                            => 10,
        ]);


        Wallet::Create([
        	'user_id'                            => 5,
            'balance'                            => 10,
        ]);
    }
}
